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
                    'username'  => 'Ceo01',
                    'full_name' => 'Jose Cordero III',
                    'role'      => 'Ceo',
                ],
                [
                    'username'  => 'Manager01',
                    'full_name' => 'Sean Santiago',
                    'role'      => 'Manager',
                ],
                [
                    'username'  => 'Cashier01',
                    'full_name' => 'John Costinar',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'Staff01',
                    'full_name' => 'Ryel Thomas',
                    'role'      => 'Staff',
                ],
                [
                    'username'  => 'Staff02',
                    'full_name' => 'Gab Reyes',
                    'role'      => 'Staff',
                ],            
            ],
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}

