<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'email' => 'd-sugimoto@csauto.jp',
          'password' => bcrypt('daisuke0309'),
        ]);

        User::create([
          'email' => 'h-isituka@csauto.jp',
          'password' => bcrypt('csat6670'),
        ]);
    }
}
