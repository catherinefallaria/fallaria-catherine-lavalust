<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UsersModel');
        $this->call->library('session');
    }

    public function login()
    {
        $this->call->view('auth/login');
    }

    public function authenticate()
    {
        $username = $this->io->post('username');
        $password = $this->io->post('password');

        $users = $this->UsersModel->all();

        foreach ($users as $user) {

            if ($user['username'] === $username && $user['password'] === $password) {

                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('username', $username);

                redirect(site_url('products'));
                exit;
            }
        }

        $data = [
            'error' => 'Invalid username or password.'
        ];

        $this->call->view('auth/login', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect(site_url('login'));
    }
}