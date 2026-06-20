<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            ['name' => 'Belum Dimulai', 'color' => 'info'],
            ['name' => 'Sedang Berjalan', 'color' => 'success'],
            ['name' => 'Menunggu Hasil', 'color' => 'warning'],
            ['name' => 'Tutup', 'color' => 'danger'],
            ['name' => 'Done', 'color' => 'black'],
        ];

        foreach ($statuses as $status) {
            Status::create([
                'name' => $status['name'],
                'color' => $status['color'],
            ]);
        }
    }
}
