<?php

namespace Database\Seeders;

use App\Models\WinnerList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WinnerListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lists = [
            ['name' => 'Juara 1'],
            ['name' => 'Juara 2'],
            ['name' => 'Juara 3'],
            ['name' => 'Juara Hiburan'],
            ['name' => 'Gugur'],
        ];

        foreach ($lists as $list) {
            WinnerList::create($list);
        }
    }
}
