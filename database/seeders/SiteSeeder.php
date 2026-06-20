<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sites = [
            [
                'name' => "ROKOKBET",
                'link' => 'https://jetlinkr.co/rokokbet-cepat-1',
                'image' => '/storage/page/logo.webp',
                'minimal_bet' => '100 Perak',
                'minimal_deposit' => '10.000',
                'minimal_withdraw' => '25.000',
                'bbfs' => '9 Digit',
                'top_promo' => 'Garansi Kekalahan 300%',
                'service' => '24 Jam',
                'markets' => '95 Pasaran',
                'deposit_bank' => 'BCA, BRI, BNI, BSI, CIMB, MANDIRI',
                'deposit_ewallet' => 'DANA, GOPAY, OVO, LINKAJA, QRIS',
            ],
        ];

        foreach ($sites as $site) {
            Site::create([
                'name' => $site['name'],
                'link' => $site['link'],
                'image' => $site['image'],
            ]);
        }
    }
}
