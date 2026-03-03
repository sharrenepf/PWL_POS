<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTambahanSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('m_kategori')->insert([
            ['kategori_id' => 1, 'kategori_kode' => 'MKN', 'kategori_nama' => 'Makanan'],
            ['kategori_id' => 2, 'kategori_kode' => 'MNM', 'kategori_nama' => 'Minuman'],
            ['kategori_id' => 3, 'kategori_kode' => 'KSH', 'kategori_nama' => 'Kesehatan'],
            ['kategori_id' => 4, 'kategori_kode' => 'PRB', 'kategori_nama' => 'Perabot'],
            ['kategori_id' => 5, 'kategori_kode' => 'ELK', 'kategori_nama' => 'Elektronik'],
        ]);

        DB::table('m_supplier')->insert([
            ['supplier_id' => 1, 'supplier_kode' => 'S01', 'supplier_nama' => 'PT Indofood', 'supplier_alamat' => 'Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'S02', 'supplier_nama' => 'Unilever', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'S03', 'supplier_nama' => 'Samsung Corp', 'supplier_alamat' => 'Seoul'],
        ]);

        for ($i = 1; $i <= 15; $i++) {
            DB::table('m_barang')->insert([
                'barang_id' => $i,
                'kategori_id' => rand(1, 5),
                'barang_kode' => 'BRG' . str_pad($i, 2, '0', STR_PAD_LEFT),
                'barang_nama' => 'Barang ' . $i,
                'harga_beli' => 5000,
                'harga_jual' => 7000,
            ]);

            DB::table('t_stok')->insert([
                'stok_id' => $i,
                'barang_id' => $i,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => 100,
            ]);
        }
    }
}
