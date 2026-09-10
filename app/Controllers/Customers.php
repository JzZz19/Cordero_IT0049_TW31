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
                    'full_name' => 'Larry Jaralbio',
                    'email'     => 'larry.jaralbio@2005.com',
                    'phone'     => '0917-123-4567',
                ],
                [
                    'full_name' => 'Lance Villaruz',
                    'email'     => 'lance.villaruz@2007.com',
                    'phone'     => '0918-234-5678',
                ],
                [
                    'full_name' => 'Jm Ballesteros',
                    'email'     => 'jm.ballesteros@2005.com',
                    'phone'     => '0919-345-6789',
                ],
                [
                    'full_name' => 'Yev Pacuan',
                    'email'     => 'yev.pacuan@2006.com',
                    'phone'     => '0920-456-7890',
                ],
                [
                    'full_name' => 'Franxine Perez',
                    'email'     => 'franxine.perez@2005.com',
                    'phone'     => '0910-476-1090',
                ],                
            ],
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}

