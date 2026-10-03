<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductApiController extends Controller
{
    public function __construct()
{
    parent::__construct();
    $this->call->model('ProductModel');

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

    // GET /api/products
    public function index()
    {
        $products = $this->ProductModel->all();

        header('Content-Type: application/json');

        echo json_encode([
            'status' => true,
            'message' => 'Products retrieved successfully',
            'data' => $products
        ]);

        exit;
    }

    // POST /api/products
    public function store()
    {
        $input = json_decode(file_get_contents('php://input'), true);

        $data = [
            'product_name' => $input['product_name'] ?? '',
            'description'  => $input['description'] ?? '',
            'price'        => $input['price'] ?? 0,
            'quantity'     => $input['quantity'] ?? 0
        ];

        $id = $this->ProductModel->insert($data);

        header('Content-Type: application/json');

        echo json_encode([
            'status' => true,
            'message' => 'Product added successfully',
            'data' => [
                'id' => $id
            ]
        ]);

        exit;
    }

    // PUT /api/products/{id}
public function update($id)
{
    $input = json_decode(file_get_contents('php://input'), true);

    $data = [
        'product_name' => $input['product_name'] ?? '',
        'description'  => $input['description'] ?? '',
        'price'        => $input['price'] ?? 0,
        'quantity'     => $input['quantity'] ?? 0
    ];

    $this->ProductModel->update($id, $data);

    header('Content-Type: application/json');

    echo json_encode([
        'status' => true,
        'message' => 'Product updated successfully',
        'data' => [
            'id' => $id
        ]
    ]);

    exit;
}

// DELETE /api/products/{id}
public function delete($id)
{
    $this->ProductModel->delete($id);

    header('Content-Type: application/json');

    echo json_encode([
        'status' => true,
        'message' => 'Product deleted successfully',
        'data' => [
            'id' => $id
        ]
    ]);

    exit;
}
}