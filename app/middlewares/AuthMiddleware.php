<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle($next)
    {
        $frontendUrl = getenv('FRONTEND_URL') ?: 'http://localhost:5173';

        header('Access-Control-Allow-Origin: ' . $frontendUrl);
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

        // Load LavaLust Session library.
        // The Session constructor already starts the PHP session.
        $session = load_class('Session', 'libraries');

        // Check if the user is logged in.
        if (
            !$session->has_userdata('logged_in') ||
            $session->userdata('logged_in') !== true
        ) {
            header('Content-Type: application/json');
            http_response_code(401);

            echo json_encode([
                'status' => false,
                'message' => 'Unauthorized. Please login first.'
            ]);

            exit;
        }

        // User is authenticated.
        return $next();
    }
}