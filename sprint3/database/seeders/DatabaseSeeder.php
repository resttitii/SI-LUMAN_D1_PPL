<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // seeding default/dummy ongkir
        DB::table('ongkir_domisili')->insert([
            [
                'alamat'    => 'Banyuwangi',
                'harga'     => 100000
            ],
            [
                'alamat'    => 'Jember',
                'harga'     => 120000
            ],
            [
                'alamat'    => 'Situbondo',
                'harga'     => 140000
            ],
            [
                'alamat'    => 'Bondowoso',
                'harga'     => 160000
            ],
            [
                'alamat'    => 'Besuki',
                'harga'     => 180000
            ],
        ]);

        // seeding default/dummy user
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'username' => 'admin01',
                'password' => Hash::make('admin456'),
                'alamat' => '-',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'no_hp' => '+6283373914639',
                'role' => 'admin'
            ],
            [
                'name' => 'Neville',
                'username' => 'nepil02',
                'password' => Hash::make('123nepil456'),
                'alamat' => 'Banyuwangi',
                'email' => 'nepil@gmail.com',
                'email_verified_at' => now(),
                'no_hp' => '+6282473914639',
                'role' => 'peternak'
            ],
            [
                'name' => 'Jeremy',
                'username' => 'jeremyx',
                'password' => Hash::make('123jeremy456'),
                'alamat' => 'Jakarta',
                'email' => 'jere@gmail.com',
                'email_verified_at' => now(),
                'no_hp' => '+6282573914638',
                'role' => 'peternak'
            ],
            [
                'name' => 'Pokuji',
                'username' => 'pokujinibos',
                'password' => Hash::make('123pokuji456'),
                'alamat' => 'Bandung',
                'email' => 'pokuji@gmail.com',
                'email_verified_at' => now(),
                'no_hp' => '+62827290128221',
                'role' => 'pelanggan'
            ],
        ]);


        // seeding default/dummy product
        DB::table('produk')->insert([
            [
                'user_id'       => 2,
                'nama_produk'   => 'Kambing',
                'image_produk'  => 'kambing.png',
                'harga'         => 150000,
                'jenis'         => 'hewan',
                'berat'         => 5,
                'deskripsi'     => 'ini kambing bagus',
                'status'        => 'tersedia'
            ],
            [
                'user_id'       => 3,
                'nama_produk'   => 'Ayam',
                'image_produk'  => 'ayam.png',
                'harga'         => 200000,
                'jenis'         => 'hewan',
                'berat'         => 2,
                'deskripsi'     => 'ini ayam bagus',
                'status'        => 'tersedia'
            ],

        ]);
    }
}
