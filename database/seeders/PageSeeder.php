<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $page = [
            [
                'name' => 'Livedraw Nana4D',
                'link' => 'http://localhost:8000',
                'main_slogan' => 'Livedraw Togel Online SDY, SGP dan HK Tercepat Di Indonesia',
                'logo' => '/storage/page/Logo.png',
                'main_article' => '<h1>Lorem ipsum dolor sit amet.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati et excepturi asperiores, ratione suscipit
                    quae
                    expedita explicabo porro? Aperiam incidunt sunt eveniet ab qui inventore quaerat voluptate quam laboriosam
                    dignissimos?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos laboriosam cupiditate quisquam maxime
                    suscipit aliquid laborum fuga modi tempora praesentium.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem at distinctio minima, fugiat sit eveniet
                    sequi tenetur debitis perspiciatis! Odio voluptas earum sed numquam praesentium qui quam saepe sit rerum.
                </p>',
                'banner' => '/storage/page/banner.webp',
                'background' => '/storage/page/background.jpg',
            ],
        ];

        foreach($page as $data){
            Page::create($data);
        }
    }
}
