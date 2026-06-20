<?php

namespace App\Console;

use Carbon\Carbon;
use App\Models\PredictMarket;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call(function () {
            $date = Carbon::now()->format("H.i");
            $results = PredictMarket::where('open', $date)->get();

            if ($results) {
                foreach ($results as $result) {
                    if ($result->name == "SINGAPORE" and (Carbon::now()->isoFormat("dddd") == "Selasa" or Carbon::now()->isoFormat("dddd") == "Jumat")) {
                        continue;
                    }elseif($result->slug == "pcso" and Carbon::now()->isoFormat("dddd") == "Minggu") {
                        continue;
                    } else {
                        $shio = ['KELINCI', 'HARIMAU', 'KERBAU', 'TIKUS', 'BABI', 'ANJING', 'AYAM', 'MONYET', 'KAMBING', 'KUDA', 'ULAR', 'NAGA'];
                        $market = [];
                        $numberPool = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

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
                        $colokMacau = $get4digit[0] . $get4digit[1];
                        $market['colokMacau'] = $colokMacau;

                        //SHIO
                        $get2lastDigit = substr($angkaMain, -2);
                        //get modulo of 12 on get2lastDigit
                        $modulo = $get2lastDigit % 12;

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



                        $result->bbfs = $market['bbfs'];
                        $result->angka_main = $market['angkaMain'];
                        $result->colok_bebas = $market['colokBebas'];
                        $result->colok_macau = $market['colokMacau'];
                        $result->shio = $market['shio'];
                        $result->twin = $market['twin'];
                        $result->dua_d1 = $digits[0] . $digits[1];
                        $result->dua_d2 = $digits[1] . $digits[5];
                        $result->dua_d3 = $digits[2] . $digits[4];
                        $result->dua_d4 = $digits[3] . $digits[2];
                        $result->dua_d5 = $digits[5] . $digits[3];
                        $result->dua_d6 = $digits[4] . $digits[0];
                        $result->dua_d7 = $digits[0] . $digits[5];
                        $result->dua_d8 = $digits[1] . $digits[3];
                        $result->dua_d9 = $digits[5] . $digits[2];
                        $result->dua_d10 = $digits[3] . $digits[5];
                        if($result->name == "SINGAPORE" and (Carbon::now()->isoFormat("dddd") == "Senin" or Carbon::now()->isoFormat("dddd") == "Kamis")) {
                            $result->updated_at = Carbon::now()->addDay();
                        }
                        if($result->slug == "pcso" and Carbon::now()->isoFormat("dddd") == "Sabtu") {
                            $result->updated_at = Carbon::now()->addDay();
                        }
                        $result->save();
                    }
                }
            }
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
