<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'zoads',
                'username' => 'beta0',
                'password' => 'rh911@5385',
                'role_id' => 1,
                'phone_number' => '081234567890',
            ],
            [
                'name' => 'csmarketing',
                'username' => 'csmarketing',
                'password' => 'JoN6kr4k447@@',
                'role_id' => 4,
                'phone_number' => '081111111111',
            ],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'username' => $user['username'],
                'password' => Hash::make($user['password']),
                'role_id' => $user['role_id'],
                'phone_number' => $user['phone_number'],
            ]);
        }
    }
}
