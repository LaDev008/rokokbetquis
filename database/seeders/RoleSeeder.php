<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'owner'],
            ['name' => 'Super Admin'],
            ['name' => 'HeadAdmin'],
            ['name' => 'Admin'],
            ['name' => 'Operational'],
            ['name' => 'Member'],
        ];

        foreach($roles as $role) {
            Role::create([
                'name' => $role['name'],
            ]);
        }
    }
}
