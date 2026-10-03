```php
<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthMiddleware
{
    public function handle($next)
    {
        $frontendUrl = getenv('FRONTEND_URL') ?: 'http://localhost:5173';

        // CORS headers for API requests
        header('Access-Control-Allow-Origin: ' . $frontendUrl);
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Content-Type');
        header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');

        $session = load_class('Session', 'libraries');

        if (
            !isset($_SESSION['logged_in']) ||
            $_SESSION['logged_in'] !== true
        ) {
            // API requests should return JSON instead of redirecting
            if (strpos($_SERVER['REQUEST_URI'], '/api/') !== false) {
                header('Content-Type: application/json');
                http_response_code(401);

                echo json_encode([
                    'status' => false,
                    'message' => 'Unauthorized. Please login first.'
                ]);

                exit;
            }

            // Normal web pages can still redirect to login
            redirect(site_url('login'));
            exit;
        }

        return $next();
    }
}
```
