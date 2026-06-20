<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Hongkong;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ThirdHongkongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $results = [
            ["date" => "2024-07-17", "first_result" => "0725", "second_result" => "4460", "third_result" => "0403"],
            ["date" => "2024-07-18", "first_result" => "2442", "second_result" => "1644", "third_result" => "4110"],
            ["date" => "2024-07-19", "first_result" => "3935", "second_result" => "0045", "third_result" => "8196"],
            ["date" => "2024-07-20", "first_result" => "5267", "second_result" => "1184", "third_result" => "6306"],
            ["date" => "2024-07-21", "first_result" => "9670", "second_result" => "0553", "third_result" => "3963"],
            ["date" => "2024-07-22", "first_result" => "3326", "second_result" => "4820", "third_result" => "6888"],
            ["date" => "2024-07-23", "first_result" => "5805", "second_result" => "1662", "third_result" => "7268"],
            ["date" => "2024-07-24", "first_result" => "1634", "second_result" => "6488", "third_result" => "4829"],
            ["date" => "2024-07-25", "first_result" => "8450", "second_result" => "8236", "third_result" => "5909"],
            ["date" => "2024-07-26", "first_result" => "0636", "second_result" => "0326", "third_result" => "5747"],
            ["date" => "2024-07-27", "first_result" => "6182", "second_result" => "0462", "third_result" => "7180"],
            ["date" => "2024-07-28", "first_result" => "1926", "second_result" => "1544", "third_result" => "3494"],
            ["date" => "2024-07-29", "first_result" => "7568", "second_result" => "7268", "third_result" => "5565"],
            ["date" => "2024-07-30", "first_result" => "2944", "second_result" => "7197", "third_result" => "3425"],
            ["date" => "2024-07-31", "first_result" => "7892", "second_result" => "1758", "third_result" => "3612"],
            ["date" => "2024-08-01", "first_result" => "4020", "second_result" => "3845", "third_result" => "0914"],
            ["date" => "2024-08-02", "first_result" => "9656", "second_result" => "7821", "third_result" => "6697"],
            ["date" => "2024-08-03", "first_result" => "3212", "second_result" => "4754", "third_result" => "6171"],
            ["date" => "2024-08-04", "first_result" => "2784", "second_result" => "0240", "third_result" => "9429"],
            ["date" => "2024-08-05", "first_result" => "5838", "second_result" => "0690", "third_result" => "4952"],
            ["date" => "2024-08-06", "first_result" => "0378", "second_result" => "0506", "third_result" => "5910"],
            ["date" => "2024-08-07", "first_result" => "6760", "second_result" => "5745", "third_result" => "0277"],
            ["date" => "2024-08-08", "first_result" => "8456", "second_result" => "5861", "third_result" => "0592"],
            ["date" => "2024-08-09", "first_result" => "3965", "second_result" => "5632", "third_result" => "1184"],
            ["date" => "2024-08-10", "first_result" => "1280", "second_result" => "5169", "third_result" => "4310"],
            ["date" => "2024-08-12", "first_result" => "8296", "second_result" => "3303", "third_result" => "8737"],
            ["date" => "2024-08-11", "first_result" => "6034", "second_result" => "3991", "third_result" => "1792"],
            ["date" => "2024-08-13", "first_result" => "7122", "second_result" => "4920", "third_result" => "4494"],
            ["date" => "2024-08-14", "first_result" => "4533", "second_result" => "2155", "third_result" => "5112"],
            ["date" => "2024-08-15", "first_result" => "0461", "second_result" => "0068", "third_result" => "7754"],
            ["date" => "2024-08-16", "first_result" => "9070", "second_result" => "3816", "third_result" => "8924"],
        ];


        foreach ($results as $result) {
            $result['day'] = Carbon::parse($result['date'])->translatedFormat('l');
            Hongkong::create($result);
        }
    }

}
