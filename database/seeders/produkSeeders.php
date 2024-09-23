<?php

namespace Database\Seeders;

use App\Models\produk;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produkSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            ['nama_produk' => '280gr', 'qty' => '70', 'harga' => '15000', 'kategori' => 'Outdoor'],
            ['nama_produk' => '340gr', 'qty' => '70', 'harga' => '20000', 'kategori' => 'Outdoor'],
            ['nama_produk' => 'Korcin', 'qty' => '70', 'harga' => '28000', 'kategori' => 'Outdoor'],

            ['nama_produk' => 'Albatros', 'qty' => '50', 'harga' => '75000', 'kategori' => 'Indoor'],
            ['nama_produk' => 'Luster', 'qty' => '50', 'harga' => '85000', 'kategori' => 'Indoor'],
            ['nama_produk' => 'Canvas', 'qty' => '50', 'harga' => '140000', 'kategori' => 'Indoor'],
            ['nama_produk' => 'Ritrama', 'qty' => '50', 'harga' => '90000', 'kategori' => 'Indoor'],
            ['nama_produk' => 'Ritrama Transparant', 'qty' => '50', 'harga' => '90000', 'kategori' => 'Indoor'],
            ['nama_produk' => 'Oneway', 'qty' => '50', 'harga' => '100000', 'kategori' => 'Indoor'],

            ['nama_produk' => 'Hvs', 'qty' => '1000', 'harga' => '2000', 'kategori' => 'A3+'],
            ['nama_produk' => 'Ap150', 'qty' => '1000', 'harga' => '2000', 'kategori' => 'A3+'],
            ['nama_produk' => 'Ap210', 'qty' => '1000', 'harga' => '2500', 'kategori' => 'A3+'],
            ['nama_produk' => 'Ap260', 'qty' => '1000', 'harga' => '3000', 'kategori' => 'A3+'],
            ['nama_produk' => 'Vinyl', 'qty' => '1000', 'harga' => '10000', 'kategori' => 'A3+'],
            ['nama_produk' => 'Vinyl Transparant', 'qty' => '1000', 'harga' => '10000', 'kategori' => 'A3+'],
            ['nama_produk' => 'Cromo', 'qty' => '1000', 'harga' => '5000', 'kategori' => 'A3+'],
            ['nama_produk' => 'TIK', 'qty' => '1000', 'harga' => '5000', 'kategori' => 'A3+'],

        ];

        foreach ($data as $value) {
            Produk::insert([
                'nama_produk' => $value['nama_produk'],
                'qty' => $value['qty'],
                'harga' => $value['harga'],
                'kategori' => $value['kategori'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
