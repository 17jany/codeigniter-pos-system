<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username'  => 'admin01',
                'full_name' => 'Andrea Lim',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'cashier01',
                'full_name' => 'Joshua Flores',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'cashier02',
                'full_name' => 'Nicole Ramos',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'manager01',
                'full_name' => 'Mark Villanueva',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'staff01',
                'full_name' => 'Sofia Navarro',
                'role'      => 'Staff',
            ],
        ];

        $data = [
            'title' => 'User Accounts',
            'users' => $users,
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}

