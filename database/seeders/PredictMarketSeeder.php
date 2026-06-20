<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\PredictMarket;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PredictMarketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $markets = [
            [
                'name' => 'SYDNEY',
                'close' => '13.25',
                'open' => '14.00',
                'emblem' => '/storage/market/emblem/sydney.webp',
            ],
            [
                'name' => 'SINGAPORE',
                'close' => '17.30',
                'open' => '17.40',
                'emblem' => '/storage/market/emblem/singapore.webp',
            ],
            [
                'name' => 'HONGKONG',
                'close' => '22.45',
                'open' => '23.00',
                'emblem' => '/storage/market/emblem/hongkong.webp',
            ],
            [
                'name' => 'MACAU 00.00 WIB',
                'close' => '23.15',
                'open' => '00.01',
                'emblem' => '/storage/market/emblem/macau.webp',
            ],
            [
                'name' => 'MACAU 13.00 WIB',
                'close' => '12.15',
                'open' => '13.00',
                'emblem' => '/storage/market/emblem/macau.webp',
            ],
            [
                'name' => 'MACAU 16.00 WIB',
                'close' => '15.15',
                'open' => '16.00',
                'emblem' => '/storage/market/emblem/macau.webp',
            ],
            [
                'name' => 'MACAU 19.00 WIB',
                'close' => '18.15',
                'open' => '19.00',
                'emblem' => '/storage/market/emblem/macau.webp',
            ],
            [
                'name' => 'MACAU 22.00 WIB',
                'close' => '21.15',
                'open' => '22.00',
                'emblem' => '/storage/market/emblem/macau.webp',

            ],
            [
                'name' => 'MACAU 23.00 WIB',
                'close' => '22.15',
                'open' => '23.00',
                'emblem' => '/storage/market/emblem/macau.webp',

            ],
            [
                'name' => 'PCSO',
                'close' => '19.55',
                'open' => '20.20',
                'emblem' => '/storage/market/emblem/pcso.webp',
            ],
            [
                'name' => 'KAIRO',
                'close' => '17.50',
                'open' => '18.00',
                'emblem' => '/storage/market/emblem/kairo.webp',
            ],
            [
                'name' => 'PERTH AUSTRALIA',
                'close' => '01.20',
                'open' => '01.30',
                'emblem' => '/storage/market/emblem/australia.webp',
            ],
            [
                'name' => 'BRISBANE AUSTRALIA',
                'close' => '02.20',
                'open' => '02.30',
                'emblem' => '/storage/market/emblem/australia.webp',
            ],
            [
                'name' => 'CANBERRA AUSTRALIA',
                'close' => '03.20',
                'open' => '03.30',
                'emblem' => '/storage/market/emblem/australia.webp',
            ],
            [
                'name' => 'TASMANIA AUSTRALIA',
                'close' => '04.20',
                'open' => '04.30',
                'emblem' => '/storage/market/emblem/australia.webp',
            ],
            [
                'name' => 'PANAMA DAY',
                'close' => '05.20',
                'open' => '05.30',
                'emblem' => '/storage/market/emblem/panama.webp',
            ],
            [
                'name' => 'PANAMA EVENING',
                'close' => '06.20',
                'open' => '06.30',
                'emblem' => '/storage/market/emblem/panama.webp',
            ],
            [
                'name' => 'PANAMA NIGHT',
                'close' => '11.20',
                'open' => '11.30',
                'emblem' => '/storage/market/emblem/panama.webp',
            ],
            [
                'name' => 'PANAMA MIDDAY',
                'close' => '17.20',
                'open' => '17.30',
                'emblem' => '/storage/market/emblem/panama.webp',
            ],
            [
                'name' => 'BEIJING',
                'close' => '19.40',
                'open' => '19.50',
                'emblem' => '/storage/market/emblem/beijing.webp',
            ],
            [
                'name' => 'CEBU MORNING',
                'close' => '15.10',
                'open' => '15.20',
                'emblem' => '/storage/market/emblem/cebu.webp',
            ],
            [
                'close' => '20.40',
                'open' => '20.50',
                'name' => 'CEBU DAY',
                'emblem' => '/storage/market/emblem/cebu.webp',
            ],
            [
                'close' => '23.40',
                'open' => '23.50',
                'name' => 'CEBU NIGHT',
                'emblem' => '/storage/market/emblem/cebu.webp',
            ],
            [
                'close' => '00.50',
                'open' => '01.00',
                'name' => 'LAOS MIDNIGHT',
                'emblem' => '/storage/market/emblem/laos.webp',
            ],
            [
                'close' => '01.50',
                'open' => '02.00',
                'name' => 'NORTH CAROLINA DAY',
                'emblem' => '/storage/market/emblem/ncarolina.webp',
            ],
            [
                'close' => '02.50',
                'open' => '03.00',
                'name' => 'OREGON(OG) 03.00 WIB',
                'emblem' => '/storage/market/emblem/oregon.webp',
            ],
            [
                'close' => '02.50',
                'open' => '03.00',
                'name' => 'COLORADO DAY',
                'emblem' => '/storage/market/emblem/colorado.webp',
            ],
            [
                'close' => '02.50',
                'open' => '03.00',
                'name' => 'MOROCCO 03.00 WIB',
                'emblem' => '/storage/market/emblem/morocco.webp',
            ],
            [
                'close' => '03.50',
                'open' => '04.00',
                'name' => 'MONTANA DAY',
                'emblem' => '/storage/market/emblem/montana.webp',
            ],
            [
                'close' => '05.50',
                'open' => '06.00',
                'name' => 'TEXAS EVENING',
                'emblem' => '/storage/market/emblem/texas.webp',
            ],
            [
                'close' => '05.50',
                'open' => '06.00',
                'name' => 'OREGON(OG) 06.00 WIB',
                'emblem' => '/storage/market/emblem/oregon.webp',
            ],
            [
                'close' => '05.50',
                'open' => '06.00',
                'name' => 'GEORGIA EVENING',
                'emblem' => '/storage/market/emblem/georgia.webp',
            ],
            [
                'close' => '05.50',
                'open' => '06.00',
                'name' => 'COLORADO EVENING',
                'emblem' => '/storage/market/emblem/colorado.webp',
            ],
            [
                'close' => '06.50',
                'open' => '07.00',
                'name' => 'MONTANA EVENING',
                'emblem' => '/storage/market/emblem/montana.webp',
            ],
            [
                'close' => '07.20',
                'open' => '07.30',
                'name' => 'WUHAN MORNING',
                'emblem' => '/storage/market/emblem/wuhan.webp',
            ],
            [
                'close' => '07.50',
                'open' => '08.00',
                'name' => 'ARIZONA EVENING',
                'emblem' => '/storage/market/emblem/arizona.webp',
            ],
            [
                'close' => '08.20',
                'open' => '08.30',
                'name' => 'KYOTO MORNING',
                'emblem' => '/storage/market/emblem/kyoto.webp',
            ],
            [
                'close' => '08.25',
                'open' => '08.50',
                'name' => 'CALIFORNIA',
                'emblem' => '/storage/market/emblem/california.webp',
            ],
            [
                'close' => '08.50',
                'open' => '09.00',
                'name' => 'OREGON(OG) 09.00 WIB',
                'emblem' => '/storage/market/emblem/oregon.webp',
            ],
            [
                'close' => '08.50',
                'open' => '09.00',
                'name' => 'IDAHO EVENING',
                'emblem' => '/storage/market/emblem/idaho.webp',
            ],
            [
                'close' => '09.20',
                'open' => '09.30',
                'name' => 'JEJU MORNING',
                'emblem' => '/storage/market/emblem/jeju.webp',
            ],
            [
                'close' => '09.40',
                'open' => '09.50',
                'name' => 'INDIANA EVENING',
                'emblem' => '/storage/market/emblem/indiana.webp',
            ],
            [
                'close' => '09.46',
                'open' => '09.56',
                'name' => 'NEWJERSEY EVENING',
                'emblem' => '/storage/market/emblem/newjersey.webp',
            ],
            [
                'close' => '09.50',
                'open' => '10.00',
                'name' => 'KENTUCKY EVENING',
                'emblem' => '/storage/market/emblem/kentucky.webp',
            ],
            [
                'close' => '09.50',
                'open' => '10.00',
                'name' => 'VIRGINIA NIGHT',
                'emblem' => '/storage/market/emblem/virginia.webp',
            ],
            [
                'close' => '09.50',
                'open' => '10.00',
                'name' => 'IDAHO NIGHT',
                'emblem' => '/storage/market/emblem/idaho.webp',
            ],
            [
                'close' => '10.02',
                'open' => '10.12',
                'name' => 'TEXAS NIGHT',
                'emblem' => '/storage/market/emblem/texas.webp',
            ],
            [
                'close' => '10.12',
                'open' => '10.22',
                'name' => 'NORTH CAROLINA EVENING',
                'emblem' => '/storage/market/emblem/ncarolina.webp',
            ],
            [
                'close' => '10.20',
                'open' => '10.30',
                'name' => 'PHUKET MIDDAY',
                'emblem' => '/storage/market/emblem/phuket.webp',
            ],
            [
                'close' => '10.24',
                'open' => '10.34',
                'name' => 'GEORGIA NIGHT',
                'emblem' => '/storage/market/emblem/georgia.webp',
            ],
            [
                'close' => '10.50',
                'open' => '11.00',
                'name' => 'ARIZONA NIGHT',
                'emblem' => '/storage/market/emblem/arizona.webp',
            ],
            [
                'close' => '11.50',
                'open' => '12.00',
                'name' => 'VENESIA',
                'emblem' => '/storage/market/emblem/venesia.webp',
            ],
            [
                'close' => '11.50',
                'open' => '12.00',
                'name' => 'OREGON(OG) 12.00 WIB',
                'emblem' => '/storage/market/emblem/oregon.webp',
            ],
            [
                'close' => '12.20',
                'open' => '12.30',
                'name' => 'LAOS MIDDAY',
                'emblem' => '/storage/market/emblem/laos.webp',
            ],
            [
                'close' => '12.50',
                'open' => '13.00',
                'name' => 'PYONGYANG',
                'emblem' => '/storage/market/emblem/pyongyang.webp',
            ],
            [
                'close' => '12.55',
                'open' => '13.15',
                'name' => 'BULLSEYE',
                'emblem' => '/storage/market/emblem/bullseye.webp',
            ],
            [
                'close' => '13.20',
                'open' => '13.30',
                'name' => 'WUHAN MIDDAY',
                'emblem' => '/storage/market/emblem/wuhan.webp',
            ],
            [
                'close' => '13.50',
                'open' => '14.00',
                'name' => 'OTTAWA',
                'emblem' => '/storage/market/emblem/ottawa.webp',
            ],
            [
                'close' => '14.20',
                'open' => '14.30',
                'name' => 'KYOTO MIDDAY',
                'emblem' => '/storage/market/emblem/kyoto.webp',
            ],
            [
                'close' => '14.50',
                'open' => '15.00',
                'name' => 'PRAHA',
                'emblem' => '/storage/market/emblem/praha.webp',
            ],
            [
                'close' => '15.20',
                'open' => '15.30',
                'name' => 'JEJU MIDDAY',
                'emblem' => '/storage/market/emblem/jeju.webp',
            ],
            [
                'close' => '15.50',
                'open' => '16.00',
                'name' => 'MOSKOW',
                'emblem' => '/storage/market/emblem/moskow.webp',
            ],
            [
                'close' => '16.20',
                'open' => '16.30',
                'name' => 'PHUKET EVENING',
                'emblem' => '/storage/market/emblem/phuket.webp',
            ],
            [
                'close' => '16.50',
                'open' => '17.00',
                'name' => 'KIEV',
                'emblem' => '/storage/market/emblem/kiev.webp',
            ],
            [
                'close' => '17.30',
                'open' => '17.40',
                'name' => 'MARINA BAY',
                'emblem' => '/storage/market/emblem/marina.webp',
            ],
            [
                'close' => '18.20',
                'open' => '18.30',
                'name' => 'LAOS EVENING',
                'emblem' => '/storage/market/emblem/laos.webp',
            ],
            [
                'close' => '18.50',
                'open' => '19.00',
                'name' => 'BUENOSAIRES',
                'emblem' => '/storage/market/emblem/buenos-aires.webp',
            ],
            [
                'close' => '17.50',
                'open' => '18.00',
                'name' => 'MOROCCO 18.00 WIB',
                'emblem' => '/storage/market/emblem/morocco.webp',
            ],
            [
                'close' => '19.20',
                'open' => '19.30',
                'name' => 'WUHAN EVENING',
                'emblem' => '/storage/market/emblem/wuhan.webp',
            ],
            [
                'close' => '19.50',
                'open' => '20.00',
                'name' => 'BRUSSEL',
                'emblem' => '/storage/market/emblem/brussel.webp',
            ],
            [
                'close' => '20.20',
                'open' => '20.30',
                'name' => 'KYOTO EVENING',
                'emblem' => '/storage/market/emblem/kyoto.webp',
            ],
            [
                'close' => '20.50',
                'open' => '21.00',
                'name' => 'ABUDHABI',
                'emblem' => '/storage/market/emblem/abudhabi.webp',
            ],
            [
                'close' => '21.20',
                'open' => '21.30',
                'name' => 'IDAHO MORNING',
                'emblem' => '/storage/market/emblem/idaho.webp',
            ],
            [
                'close' => '20.50',
                'open' => '21.00',
                'name' => 'MOROCCO 21.00 WIB',
                'emblem' => '/storage/market/emblem/morocco.webp',
            ],
            [
                'close' => '21.50',
                'open' => '22.00',
                'name' => 'ARIZONA MORNING',
                'emblem' => '/storage/market/emblem/arizona.webp',
            ],
            [
                'close' => '21.55',
                'open' => '22.00',
                'name' => 'TEXAS MORNING',
                'emblem' => '/storage/market/emblem/texas.webp',
            ],

            [
                'close' => '22.20',
                'open' => '22.30',
                'name' => 'JEJU NIGHT',
                'emblem' => '/storage/market/emblem/jeju.webp',
            ],
            [
                'close' => '22.50',
                'open' => '23.00',
                'name' => 'MONTANA MORNING',
                'emblem' => '/storage/market/emblem/montana.webp',
            ],
            [
                'close' => '23.19',
                'open' => '23.30',
                'name' => 'GEORGIA MID',
                'emblem' => '/storage/market/emblem/georgia.webp',
            ],
            [
                'close' => '23.49',
                'open' => '23.58',
                'name' => 'NEWJERSEY MID',
                'emblem' => '/storage/market/emblem/newjersey.webp',
            ],
            [
                'close' => '23.50',
                'open' => '23.59',
                'name' => 'COLORADO MID',
                'emblem' => '/storage/market/emblem/colorado.webp',
            ],
            [
                'close' => '00.10',
                'open' => '00.25',
                'name' => 'INDIANA MID',
                'emblem' => '/storage/market/emblem/indiana.webp',
            ],
            [
                'close' => '00.10',
                'open' => '00.25',
                'name' => 'KENTUCKY MID',
                'emblem' => '/storage/market/emblem/kentucky.webp',
            ],
            [
                'close' => '00.20',
                'open' => '00.27',
                'name' => 'TEXAS DAY',
                'emblem' => '/storage/market/emblem/texas.webp',
            ],
            [
                'close' => '00.20',
                'open' => '00.30',
                'name' => 'PHUKET NIGHT',
                'emblem' => '/storage/market/emblem/phuket.webp',
            ],
            [
                'close' => '23.50',
                'open' => '23.59',
                'name' => 'MOROCCO 00.00 WIB',
                'emblem' => '/storage/market/emblem/morocco.webp',
            ],
            [
                'close' => '00.50',
                'open' => '01.00',
                'name' => 'VIRGINIA DAY',
                'emblem' => '/storage/market/emblem/virginia.webp',
            ],
        ];

        $shio = ['KELINCI', 'HARIMAU', 'KERBAU', 'TIKUS', 'BABI', 'ANJING', 'AYAM', 'MONYET', 'KAMBING', 'KUDA', 'ULAR', 'NAGA'];

        $numberPool = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

        foreach ($markets as $market) {
            shuffle($numberPool);
            $bbfsPool = array_slice($numberPool, 0, 6);
            $bbfs = implode("", $bbfsPool);
            $market['bbfs'] = $bbfs;

            // CHANGE STRING to ARRAY
            $number = [];
            $digits = str_split($bbfs);
            foreach ($digits as $digit) {
                $number[] = $digit;
            }

            // GET 4 DIGIT NUMBER BASED ON ARRAY VALUE
            shuffle($number);
            $get4digit = array_slice($number, 0, 4);
            $angkaMain = implode('', $get4digit);
            $market['angkaMain'] = $angkaMain;

            shuffle($get4digit);
            $colokBebas = $get4digit[0];
            $market['colokBebas'] = $colokBebas;

            shuffle($get4digit);
            $colokMacau = $get4digit[0];
            $market['colokMacau'] = $colokMacau;

            //SHIO
            $get2lastDigit = substr($angkaMain, -2);
            //get modulo of 12 on get2lastDigit
            $modulo =  intval($get2lastDigit) % 12;

            //switch 12 case
            switch ($modulo) {
                case 0:
                    $market['shio'] = $shio[11];
                    break;
                case 1:
                    $market['shio'] = $shio[0];
                    break;
                case 2:
                    $market['shio'] = $shio[1];
                    break;
                case 3:
                    $market['shio'] = $shio[2];
                    break;
                case 4:
                    $market['shio'] = $shio[3];
                    break;
                case 5:
                    $market['shio'] = $shio[4];
                    break;
                case 6:
                    $market['shio'] = $shio[5];
                    break;
                case 7:
                    $market['shio'] = $shio[6];
                    break;
                case 8:
                    $market['shio'] = $shio[7];
                    break;
                case 9:
                    $market['shio'] = $shio[8];
                    break;
                case 10:
                    $market['shio'] = $shio[9];
                    break;
                case 11:
                    $market['shio'] = $shio[10];
                    break;
            }

            // GET TWIN NUMBER
            shuffle($get4digit);
            $firstDigit = $get4digit[0];
            $secondDigit = $get4digit[1];
            if ($firstDigit == $secondDigit) {
                $secondDigit = $get4digit[2];
                if ($firstDigit == $secondDigit) {
                    $secondDigit = $get4digit[3];
                }
            }
            $twin = "$firstDigit" . "$firstDigit " . "$secondDigit" . "$secondDigit";
            $market['twin'] = $twin;

            // IMAGE NAME GENERATOR
            $no_space = str_replace(' ', '', $market['name']);
            $no_dot = str_replace('.', '', $no_space);
            $slug = str_replace(' ', '-', $market['name']);
            $market['image'] = "/storage/market/" . Str::lower($no_dot) . ".webp";
            $market['slug'] = Str::lower($slug);

            shuffle($digits);

            PredictMarket::create([
                'name' => $market['name'],
                'slug' => $market['slug'],
                'image' => $market['image'],
                'bbfs' => $market['bbfs'],
                'angka_main' => $market['angkaMain'],
                'colok_bebas' => $market['colokBebas'],
                'colok_macau' => $market['colokMacau'],
                'shio' => $market['shio'],
                'twin' => $market['twin'],
                'close' => $market['close'],
                'open' => $market['open'],
                'dua_d1' => $digits[0] . $digits[1],
                'dua_d2' => $digits[1] . $digits[5],
                'dua_d3' => $digits[2] . $digits[4],
                'dua_d4' => $digits[3] . $digits[2],
                'dua_d5' => $digits[5] . $digits[3],
                'dua_d6' => $digits[4] . $digits[0],
                'dua_d7' => $digits[0] . $digits[5],
                'dua_d8' => $digits[4] . $digits[5],
                'dua_d9' => $digits[5] . $digits[2],
                'dua_d10' => $digits[3] . $digits[5],
                'emblem' => $market['emblem'],
            ]);
        }
    }
}
