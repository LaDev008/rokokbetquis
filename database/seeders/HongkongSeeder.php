<?php

namespace Database\Seeders;

use App\Models\Hongkong;
use App\Models\Sydney;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HongkongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $results = [
            [
                'date' => '2024-08-17',
                'day' => 'sabtu',
                'first_result' => '1393',
                'second_result' => '5844',
                'third_result' => '3305',
            ],
            [
                'date' => '2024-08-18',
                'day' => 'minggu',
                'first_result' => '4118',
                'second_result' => '3222',
                'third_result' => '2127',
            ],
            [
                'date' => '2024-08-19',
                'day' => 'senin',
                'first_result' => '5985',
                'second_result' => '4402',
                'third_result' => '1520',
            ],
            [
                'date' => '2024-08-20',
                'day' => 'selasa',
                'first_result' => '0549',
                'second_result' => '3445',
                'third_result' => '8160',
            ],
            [
                'date' => '2024-08-21',
                'day' => 'rabu',
                'first_result' => '8074',
                'second_result' => '8703',
                'third_result' => '4364',
            ],
            [
                'date' => '2024-08-22',
                'day' => 'kamis',
                'first_result' => '0963',
                'second_result' => '8993',
                'third_result' => '9404',
            ],
            [
                'date' => '2024-08-23',
                'day' => 'jumat',
                'first_result' => '5305',
                'second_result' => '7869',
                'third_result' => '6163',
            ],
            [
                'date' => '2024-08-24',
                'day' => 'sabtu',
                'first_result' => '1490',
                'second_result' => '7320',
                'third_result' => '3711',
            ],
            [
                'date' => '2024-08-25',
                'day' => 'minggu',
                'first_result' => '7618',
                'second_result' => '9816',
                'third_result' => '0217',
            ],

            [
                'date' => '2024-08-26',
                'day' => 'senin',
                'first_result' => '3843',
                'second_result' => '9956',
                'third_result' => '9586',
            ],
            [
                'date' => '2024-08-27',
                'day' => 'selasa',
                'first_result' => '6519',
                'second_result' => '0954',
                'third_result' => '5523',
            ],
            [
                'date' => '2024-08-28',
                'day' => 'rabu',
                'first_result' => '0498',
                'second_result' => '0954',
                'third_result' => '5370',
            ],
            [
                'date' => '2024-08-29',
                'day' => 'kamis',
                'first_result' => '7267',
                'second_result' => '9276',
                'third_result' => '1482',
            ],
            [
                'date' => '2024-08-31',
                'day' => 'sabtu',
                'first_result' => '7116',
                'second_result' => '3024',
                'third_result' => '9036',
            ],
            [
                'date' => '2024-09-01',
                'day' => 'minggu',
                'first_result' => '3768',
                'second_result' => '0647',
                'third_result' => '9333',
            ],
            [
                'date' => '2024-09-02',
                'day' => 'senin',
                'first_result' => '5976',
                'second_result' => '5238',
                'third_result' => '0337',
            ],
            [
                'date' => '2024-09-03',
                'day' => 'selasa',
                'first_result' => '8461',
                'second_result' => '1539',
                'third_result' => '2167',
            ],
            [
                'date' => '2024-09-04',
                'day' => 'rabu',
                'first_result' => '9647',
                'second_result' => '4171',
                'third_result' => '5596',
            ],
            [
                'date' => '2024-09-05',
                'day' => 'kamis',
                'first_result' => '2480',
                'second_result' => '2836',
                'third_result' => '3957',
            ],
            [
                'date' => '2024-09-06',
                'day' => 'jumat',
                'first_result' => '6091',
                'second_result' => '1475',
                'third_result' => '9683',
            ],
            [
                'date' => '2024-09-07',
                'day' => 'sabtu',
                'first_result' => '4525',
                'second_result' => '3607',
                'third_result' => '4966',
            ],
            [
                'date' => '2024-09-08',
                'day' => 'minggu',
                'first_result' => '8145',
                'second_result' => '9540',
                'third_result' => '9396',
            ],
            [
                'date' => '2024-09-09',
                'day' => 'senin',
                'first_result' => '3401',
                'second_result' => '3025',
                'third_result' => '6923',
            ],
            [
                'date' => '2024-09-10',
                'day' => 'selasa',
                'first_result' => '4982',
                'second_result' => '3133',
                'third_result' => '3479',
            ],
            [
                'date' => '2024-09-11',
                'day' => 'rabu',
                'first_result' => '2774',
                'second_result' => '0687',
                'third_result' => '0687',
            ],
            [
                'date' => '2024-09-12',
                'day' => 'kamis',
                'first_result' => '9690',
                'second_result' => '9845',
                'third_result' => '6627',
            ],
            [
                'date' => '2024-09-13',
                'day' => 'jumat',
                'first_result' => '6421',
                'second_result' => '0789',
                'third_result' => '1088',
            ],
            [
                'date' => '2024-09-14',
                'day' => 'sabtu',
                'first_result' => '1545',
                'second_result' => '6053',
                'third_result' => '4056',
            ],
            [
                'date' => '2024-09-15',
                'day' => 'minggu',
                'first_result' => '1762',
                'second_result' => '8742',
                'third_result' => '2593',
            ],
            [
                'date' => '2024-09-16',
                'day' => 'senin',
                'first_result' => '5213',
                'second_result' => '5364',
                'third_result' => '9245',
            ],
            [
                'date' => '2024-09-17',
                'day' => 'selasa',
                'first_result' => '3070',
                'second_result' => '2546',
                'third_result' => '4744',
            ],
            [
                'date' => '2024-09-18',
                'day' => 'rabu',
                'first_result' => '5714',
                'second_result' => '0181',
                'third_result' => '3942',
            ],
            [
                'date' => '2024-09-19',
                'day' => 'kamis',
                'first_result' => '3247',
                'second_result' => '3243',
                'third_result' => '8158',
            ],
            [
                'date' => '2024-09-20',
                'day' => 'jumat',
                'first_result' => '7388',
                'second_result' => '9935',
                'third_result' => '6933',
            ],
            [
                'date' => '2024-09-21',
                'day' => 'sabtu',
                'first_result' => '4194',
                'second_result' => '8753',
                'third_result' => '0203',
            ],
            [
                'date' => '2024-09-22',
                'day' => 'minggu',
                'first_result' => '5938',
                'second_result' => '5090',
                'third_result' => '6990',
            ],
            [
                'date' => '2024-09-23',
                'day' => 'senin',
                'first_result' => '8510',
                'second_result' => '1658',
                'third_result' => '7617',
            ],
        ];

        foreach($results as $result) {
            Hongkong::create($result);
        }
    }
}
