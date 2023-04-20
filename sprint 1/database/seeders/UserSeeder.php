<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin SI-LUMAN',
            'username' => 'siluman01',
            'password' => Hash::make('admin123'),
            'alamat' => '-',
            'email' => 'infosiluman@gmail.com',
            'email_verified_at' => now(),
            'no_hp' => 0,
            'role' => 'admin'
        ]);
    }
}
