<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Customer Accounts',
            'customers' => [
                [
                    'full_name' => 'Juan Dela Cruz',
                    'email'     => 'juan.delacruz@example.com',
                    'phone'     => '0917-123-4567',
                ],
                [
                    'full_name' => 'Maria Santos',
                    'email'     => 'maria.santos@example.com',
                    'phone'     => '0918-234-5678',
                ],
                [
                    'full_name' => 'Pedro Reyes',
                    'email'     => 'pedro.reyes@example.com',
                    'phone'     => '0919-345-6789',
                ],
                [
                    'full_name' => 'Ana Garcia',
                    'email'     => 'ana.garcia@example.com',
                    'phone'     => '0920-456-7890',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}

