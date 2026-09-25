<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Produk;
use App\Http\Controllers\TransaksiController;
use Illuminate\Foundation\Testing\RefreshDatabase;

class KasirTest extends TestCase
{
    use RefreshDatabase;


    public function test_hitung_subtotal()
    {
        $kasir = new TransaksiController();


        $this->assertEquals(
            45000,
            $kasir->hitungSubtotal(15000, 3)
        );
    }


    public function test_kurangi_stok()
    {

        $produk = Produk::create([
            'nama_produk' => 'Mochi',
            'harga' => 5000,
            'stok' => 45
        ]);


        $kasir = new TransaksiController();
        $kasir->kurangiStok($produk->id, 3);


        $this->assertEquals(
            7,
            $produk->fresh()->stok
        );
    }
}
