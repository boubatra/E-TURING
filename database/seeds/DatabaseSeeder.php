<?php

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
        // $this->call(UserSeeder::class);
        App\User::create(
            [
                'nom' => 'test',
                'prenom' => 'test',
                'domicile' => 'ouakam',
                'tel' => '77777777',
                'CIN' => '11111111',
                'date_nais' => '1111/11/11',
                'email' => 'test@test.com',
                'password' => ('test'),
            ]
        );
    }
}
