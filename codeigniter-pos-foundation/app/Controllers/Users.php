<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'User Accounts',
            'users' => [
                [
                    'username'  => 'admin01',
                    'full_name' => 'Jose Cordero III',
                    'role'      => 'Administrator',
                ],
                [
                    'username'  => 'cashier01',
                    'full_name' => 'Angela Ramos',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'staff01',
                    'full_name' => 'Mark Villanueva',
                    'role'      => 'Staff',
                ],
                [
                    'username'  => 'manager01',
                    'full_name' => 'Carla Mendoza',
                    'role'      => 'Manager',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}

