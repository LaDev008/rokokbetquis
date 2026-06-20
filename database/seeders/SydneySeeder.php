<?php

namespace Database\Seeders;

use App\Models\Sydney;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SydneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $results = [
            [
                'date' => '2024-08-30',
                'day' => 'jumat',
                'first_result' => '8341',
                'second_result' => '4592',
                'third_result' => '1613',
            ],
            [
                'date' => '2024-08-31',
                'day' => 'sabtu',
                'first_result' => '6836',
                'second_result' => '8961',
                'third_result' => '6115',
            ],
            [
                'date' => '2024-09-01',
                'day' => 'minggu',
                'first_result' => '9367',
                'second_result' => '8343',
                'third_result' => '2096',
            ],
            [
                'date' => '2024-09-02',
                'day' => 'senin',
                'first_result' => '0171',
                'second_result' => '8726',
                'third_result' => '2267',
            ],
            [
                'date' => '2024-09-03',
                'day' => 'selasa',
                'first_result' => '3022',
                'second_result' => '3368',
                'third_result' => '0869',
            ],
            [
                'date' => '2024-09-04',
                'day' => 'rabu',
                'first_result' => '2685',
                'second_result' => '6494',
                'third_result' => '2171',
            ],
            [
                'date' => '2024-09-05',
                'day' => 'kamis',
                'first_result' => '4648',
                'second_result' => '5761',
                'third_result' => '4596',
            ],
            [
                'date' => '2024-09-06',
                'day' => 'jumat',
                'first_result' => '9836',
                'second_result' => '6783',
                'third_result' => '3814',
            ],
            [
                'date' => '2024-09-07',
                'day' => 'sabtu',
                'first_result' => '8905',
                'second_result' => '4293',
                'third_result' => '1531',
            ],
            [
                'date' => '2024-09-08',
                'day' => 'minggu',
                'first_result' => '6121',
                'second_result' => '8343',
                'third_result' => '2096',
            ],
            [
                'date' => '2024-09-09',
                'day' => 'senin',
                'first_result' => '3219',
                'second_result' => '8407',
                'third_result' => '4123',
            ],
            [
                'date' => '2024-09-10',
                'day' => 'selasa',
                'first_result' => '1029',
                'second_result' => '6684',
                'third_result' => '9925',
            ],
            [
                'date' => '2024-09-11',
                'day' => 'rabu',
                'first_result' => '7914',
                'second_result' => '7412',
                'third_result' => '0848',
            ],
            [
                'date' => '2024-09-12',
                'day' => 'kamis',
                'first_result' => '6301',
                'second_result' => '8808',
                'third_result' => '5010',
            ],
            [
                'date' => '2024-09-13',
                'day' => 'jumat',
                'first_result' => '1545',
                'second_result' => '6053',
                'third_result' => '4057',
            ],
            [
                'date' => '2024-09-14',
                'day' => 'sabtu',
                'first_result' => '7132',
                'second_result' => '4665',
                'third_result' => '3224',
            ],
            [
                'date' => '2024-09-15',
                'day' => 'minggu',
                'first_result' => '2587',
                'second_result' => '1663',
                'third_result' => '2815',
            ],
            [
                'date' => '2024-09-16',
                'day' => 'senin',
                'first_result' => '0809',
                'second_result' => '4223',
                'third_result' => '1370',
            ],
            [
                'date' => '2024-09-17',
                'day' => 'selasa',
                'first_result' => '7348',
                'second_result' => '2490',
                'third_result' => '0972',
            ],
            [
                'date' => '2024-09-18',
                'day' => 'rabu',
                'first_result' => '4262',
                'second_result' => '0127',
                'third_result' => '2643',
            ],
            [
                'date' => '2024-09-19',
                'day' => 'kamis',
                'first_result' => '6801',
                'second_result' => '4954',
                'third_result' => '8393',
            ],
            [
                'date' => '2024-09-20',
                'day' => 'jumat',
                'first_result' => '4504',
                'second_result' => '9999',
                'third_result' => '5986',
            ],
            [
                'date' => '2024-09-21',
                'day' => 'sabtu',
                'first_result' => '9013',
                'second_result' => '8965',
                'third_result' => '3747',
            ],
            [
                'date' => '2024-09-22',
                'day' => 'minggu',
                'first_result' => '0238',
                'second_result' => '6673',
                'third_result' => '3927',
            ],
            [
                'date' => '2024-09-23',
                'day' => 'senin',
                'first_result' => '5849',
                'second_result' => '9895',
                'third_result' => '8982',
            ],
        ];

        foreach($results as $result) {
            Sydney::create($result);
        }
    }
}
