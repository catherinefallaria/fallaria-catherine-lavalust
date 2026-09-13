<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('UsersModel');
    }

    public function index()
    {

        $users = $this->UsersModel->all();

        $data = [
            'users' => $users
        ];

        $this->call->view('users/index', $data);
    }
    public function create()
{
    $this->call->view('users/create');
}

public function store()
{
    $data = [
        'firstname' => $this->io->post('firstname'),
        'lastname'  => $this->io->post('lastname'),
        'course'    => $this->io->post('course'),
        'email'     => $this->io->post('email'),
        'username'  => $this->io->post('username')
    ];

    $this->UsersModel->insert($data);

    redirect(site_url('users'));
}

public function edit($id)
{
    $user = $this->UsersModel->find($id);

    $data = [
        'user' => $user
    ];

    $this->call->view('users/edit', $data);
}

public function update($id)
{
    $data = [
        'firstname' => $this->io->post('firstname'),
        'lastname'  => $this->io->post('lastname'),
        'course'    => $this->io->post('course'),
        'email'     => $this->io->post('email'),
        'username'  => $this->io->post('username')
    ];

    $this->UsersModel->update($id, $data);

    redirect(site_url('users'));
}

public function delete($id)
{
    $this->UsersModel->delete($id);

    redirect(site_url('users'));
}
}