<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
{
    // Allow student to access the protected profile page
    $_SESSION['student_access'] = true;

    $data['student'] = [
        'student_id' => 'MCC2022-1178',
        'name' => 'Catherine Fallaria',
        'course' => 'BS Information Technology',
        'year' => '3rd Year',
        'section' => '3-F6',
        'email' => 'catherinefallaria13@gmail.com'
    ];

    $this->call->view('student/index', $data);
}

    public function profile()
    {
        $data['student'] = [
            'student_id' => 'MCC2022-1178',
            'name' => 'Catherine Fallaria',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3-F6',
            'email' => 'catherinefallaria13@gmail.com'
        ];

        $this->call->view('student/profile', $data);
    }
}