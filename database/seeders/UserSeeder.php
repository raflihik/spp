<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'nama_petugas' => 'Administrator',
            'level' => 'admin'
        ]);
        // User::create([
        //     'username' => 'petugas',
        //     'email' => 'petugas@gmail.com',
        //     'password' => Hash::make('12345'),
        //     'nama_petugas' => 'petugas1',
        //     'level' => 'petugas'
        // ]);
        // User::create([
        //     'username' => 'siswa1',
        //     'email' => 'siswa@gmail.com',
        //     'password' => Hash::make('54321'),
        //     'nama_petugas' => 'siswa1',
        //     'level' => 'siswa'
        // ]);
    }
}
