<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\article::create([
            'nom'=>'kaido',
            'image'=>'https://www.sideshow.com/storage/product-images/908026/kaido_one-piece_silo.png',
            'prix'=>'30',
            'description'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry'
        ]);
    }
}
