<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            PageSeeder::class,
            SeoPageSeeder::class,
            SiteSeeder::class,
            WinnerListSeeder::class,
            PredictMarketSeeder::class,
            SydneySeeder::class,
            SecondSydneySeeder::class,
            ThirdSydneySeeder::class,
            FourthSydneySeeder::class,
            FifthSydneySeeder::class,
            SingaporeSeeder::class,
            HongkongSeeder::class,
            SecondHongkongSeeder::class,
            ThirdHongkongSeeder::class,
            MacauSeeder::class,
            StatusSeeder::class,
            // DreambookSeeder::class,
        ]);
    }
}
