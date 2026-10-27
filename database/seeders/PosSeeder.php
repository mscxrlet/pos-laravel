<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            [
                'full_name' => 'Nadine Razalan',
                'email' => 'nadine@example.com',
                'phone' => '0917-123-4567',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Neon Fangon',
                'email' => 'neon@example.com',
                'phone' => '0918-234-5678',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Abby Abinuman',
                'email' => 'abby@example.com',
                'phone' => '0919-345-6789',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Jirha Abit',
                'email' => 'jirha@example.com',
                'phone' => '0920-456-7890',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Athena Palomo',
                'email' => 'athena@example.com',
                'phone' => '0921-567-8901',
                'created_at' => now(),
            ],
        ]);

        DB::table('users')->insert([
            [
                'username' => 'admin01',
                'full_name' => 'Mavverick Watanabe',
                'created_at' => now(),
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Ramcel Manasis',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Shai Calonge',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Patrick Calabia',
                'created_at' => now(),
            ],
            [
                'username' => 'inventory01',
                'full_name' => 'Philip Malayao',
                'created_at' => now(),
            ],
        ]);
    }
}