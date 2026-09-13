<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('ProductModel');
    }

    public function index()
    {
        $products = $this->ProductModel->all();

        $data = [
            'products' => $products
        ];

        $this->call->view('products/index', $data);
    }

    public function create()
    {
        $this->call->view('products/create');
    }

    public function store()
    {
        $data = [
            'product_name' => $this->io->post('product_name'),
            'description'  => $this->io->post('description'),
            'price'        => $this->io->post('price'),
            'quantity'     => $this->io->post('quantity')
        ];

        $this->ProductModel->insert($data);

        redirect(site_url('products'));
    }

    public function edit($id)
    {
        $product = $this->ProductModel->find($id);

        $data = [
            'product' => $product
        ];

        $this->call->view('products/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'product_name' => $this->io->post('product_name'),
            'description'  => $this->io->post('description'),
            'price'        => $this->io->post('price'),
            'quantity'     => $this->io->post('quantity')
        ];

        $this->ProductModel->update($id, $data);

        redirect(site_url('products'));
    }

    public function delete($id)
    {
        $this->ProductModel->delete($id);

        redirect(site_url('products'));
    }
}