<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([  
            'name'  => 'Administrator',
            'username'  => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'nama_petugas' => 'admin',
            'level' => 'admin'
        ]);
    }
}
