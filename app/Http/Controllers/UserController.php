<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Mavverick Watanabe',
                'role' => 'Administrator',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Ramcel Manasis',
                'role' => 'Manager',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Shai Calonge',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Patrick Calabia',
                'role' => 'Cashier',
            ],
            [
                'username' => 'inventory01',
                'full_name' => 'Philip Malayao',
                'role' => 'Inventory Staff',
            ],
        ];

        return view('users.index', compact('users'));
    }
}