<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;


class ProdukSeeder extends Seeder
{
    public function run(): void
    {

        $daftarProduk = [
            ['nama_produk' => 'Lavender Milk',    'harga' => 12000,  'stok' => 15],
            ['nama_produk' => 'Green tea',        'harga' => 5000,  'stok' => 20],
            ['nama_produk' => 'Tiramisu Lava Cake',   'harga' => 20000,  'stok' => 35],
            ['nama_produk' => 'Capucinno',         'harga' => 15000, 'stok' => 16],
            ['nama_produk' => 'Mochi Matcha',  'harga' => 5000, 'stok' => 55],
            ['nama_produk' => 'Mochi Strawberry',    'harga' => 5000, 'stok' => 45],
            ['nama_produk' => 'Mochi Durian', 'harga' => 5000, 'stok' => 50],
            ['nama_produk' => 'Coffe',    'harga' => 10000,  'stok' => 0],   
        ];

        foreach ($daftarProduk as $produk) {

            Produk::firstOrCreate(['nama_produk' => $produk['nama_produk']], $produk);
        }
    }
}
