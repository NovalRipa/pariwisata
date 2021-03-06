<?php

namespace Database\Seeders;

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
        $this->call([
            UsersSeeder::class,
            Destinasiseeder::class,
            Wisataseeder::class,
            Contactseeder::class,
        ]);
        //jalankan perintah
        // php artisan migrate:fresh --seed
    }
}
