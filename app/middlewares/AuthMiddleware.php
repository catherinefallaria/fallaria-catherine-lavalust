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

        // Load the session library
        $session = load_class('Session', 'libraries');

        // Make sure the PHP session is active
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // Check if the user is logged in
        if (
            !isset($_SESSION['logged_in']) ||
            $_SESSION['logged_in'] !== true
        ) {
            header('Content-Type: application/json');
            http_response_code(401);

            echo json_encode([
                'status' => false,
                'message' => 'Unauthorized. Please login first.'
            ]);

            exit;
        }

        // User is authenticated
        return $next();
    }
}