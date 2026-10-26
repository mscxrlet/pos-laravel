<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Nadine Razalan',
                'email' => 'nadine@example.com',
                'phone' => '0917-123-4567',
            ],
            [
                'full_name' => 'Neon Fangon',
                'email' => 'neon@example.com',
                'phone' => '0918-234-5678',
            ],
            [
                'full_name' => 'Abby Abinuman',
                'email' => 'abby@example.com',
                'phone' => '0919-345-6789',
            ],
            [
                'full_name' => 'Jirha Abit',
                'email' => 'jirha@example.com',
                'phone' => '0920-456-7890',
            ],
            [
                'full_name' => 'Athena Palomo',
                'email' => 'athena@example.com',
                'phone' => '0921-567-8901',
            ],
        ];

        return view('customers.index', compact('customers'));
    }
}