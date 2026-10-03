<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthApiController extends Controller
{
    public function __construct()
{
    parent::__construct();
    $this->call->model('UsersModel');
    $this->call->library('session');

    $frontendUrl = getenv('FRONTEND_URL') ?: 'http://localhost:5173';

    header('Access-Control-Allow-Origin: ' . $frontendUrl);
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
}

public function options()
{
    $frontendUrl = getenv('FRONTEND_URL') ?: 'http://localhost:5173';

    header('Access-Control-Allow-Origin: ' . $frontendUrl);
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

    http_response_code(204);
    exit;
}

    // POST /api/login
    public function login()
    {
        $input = json_decode(file_get_contents('php://input'), true);

        $username = $input['username'] ?? '';
        $password = $input['password'] ?? '';

        $users = $this->UsersModel->all();

        foreach ($users as $user) {

            if (
                $user['username'] === $username &&
                $user['password'] === $password
            ) {

                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('username', $username);

                header('Content-Type: application/json');

                echo json_encode([
                    'status' => true,
                    'message' => 'Login successful',
                    'data' => [
                        'username' => $username
                    ]
                ]);

                exit;
            }
        }

        header('Content-Type: application/json');
        http_response_code(401);

        echo json_encode([
            'status' => false,
            'message' => 'Invalid username or password'
        ]);

        exit;
    }

    // POST /api/logout
    public function logout()
    {
        $this->session->sess_destroy();

        header('Content-Type: application/json');

        echo json_encode([
            'status' => true,
            'message' => 'Logout successful'
        ]);

        exit;
    }
}