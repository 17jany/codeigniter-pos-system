<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Janyrose Guelas',
                'email'     => 'janyxgarcia@gmail.com',
                'phone'     => '0917-123-4567',
            ],
            [
                'full_name' => 'Erinch Nichole Pacheco',
                'email'     => 'erinchpacheco@gmail.com',
                'phone'     => '0918-234-5678',
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email'     => 'carloreyes@gmail.com',
                'phone'     => '0919-345-6789',
            ],
            [
                'full_name' => 'Angela Garcia',
                'email'     => 'angelagarcia@gmail.com',
                'phone'     => '0920-456-7890',
            ],
            [
                'full_name' => 'Paolo Mendoza',
                'email'     => 'paolomendoza@gmail.com',
                'phone'     => '0921-567-8901',
            ],
        ];

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customers,
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}

