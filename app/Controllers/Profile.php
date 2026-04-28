<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $session = session();

        $data = [
            'username' => $session->get('username'),
            'email' => $session->get('email'),
            'role' => $session->get('role'),
            'login_time' => $session->get('login_time'),
            'isLoggedIn' => $session->get('isLoggedIn')
        ];

        return view('profile_view', $data);
    }
}