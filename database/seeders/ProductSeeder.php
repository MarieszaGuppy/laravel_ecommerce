<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Ramsey\Uuid\Type\Time;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'kategori' => 'baju',
            'image' => 'baju1.jpeg',
            'merek' => 'Tako Clothes',
            'deskripsi' => 'Ini Baju Dengan Design Osaka',
            'harga' => 'Rp.370.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'baju',
            'image' => 'baju2.jpeg',
            'merek' => 'Puffer Clothes',
            'deskripsi' => 'Ini Baju Dengan Design Puffer',
            'harga' => 'Rp.350.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        Product::create([
            'kategori' => 'baju',
            'image' => 'baju3.jpeg',
            'merek' => 'Sea Of Japan Clothes',
            'deskripsi' => 'Ini Baju Dengan Design Sea Of Japan',
            'harga' => 'Rp.280.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        Product::create([
            'kategori' => 'baju',
            'image' => 'baju5.jpeg',
            'merek' => 'FORGOTEN Clothes',
            'deskripsi' => 'Ini Baju Dengan Design FORGOTEN',
            'harga' => 'Rp.325.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        Product::create([
            'kategori' => 'baju',
            'image' => 'baju6.jpeg',
            'merek' => 'CATS Clothes',
            'deskripsi' => 'Ini Baju Dengan Design CATS',
            'harga' => 'Rp.395.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        Product::create([
            'kategori' => 'hoodie',
            'image' => 'hoodie1.jpeg',
            'merek' => 'Red Trees Hoodie',
            'deskripsi' => 'Ini Hoodie Dengan Design Red Trees',
            'harga' => 'Rp.370.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'hoodie',
            'image' => 'hoodie2.jpeg',
            'merek' => 'Dog Hoodie',
            'deskripsi' => 'Ini Hoodie Dengan Design Dog',
            'harga' => 'Rp.370.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'hoodie',
            'image' => 'hoodie4.jpeg',
            'merek' => 'Japanese Montain Hoodie',
            'deskripsi' => 'Ini Hoodie Dengan Design Japanese Montain',
            'harga' => 'Rp.370.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'hoodie',
            'image' => 'hoodie5.jpeg',
            'merek' => 'Sushi Hoodie',
            'deskripsi' => 'Ini Hoodie Dengan Design Sushi',
            'harga' => 'Rp.370.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);

        Product::create([
            'kategori' => 'topi',
            'image' => 'hat1.jpeg',
            'merek' => 'Dragon Hat',
            'deskripsi' => 'Ini Topi Dengan Design Dragon',
            'harga' => 'Rp.150.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'topi',
            'image' => 'hat2.jpeg',
            'merek' => 'Toothless Hat',
            'deskripsi' => 'Ini Topi Dengan Design Toothless',
            'harga' => 'Rp.150.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'topi',
            'image' => 'hat3.jpeg',
            'merek' => 'Yellow Duck Bucky Hat',
            'deskripsi' => 'Ini Topi Bucky Dengan Design Yellow Duck',
            'harga' => 'Rp.150.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'topi',
            'image' => 'hat4.jpeg',
            'merek' => 'Axolotl Beanie',
            'deskripsi' => 'Ini Beanie Dengan Design Axolotl',
            'harga' => 'Rp.150.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'topi',
            'image' => 'hat5.jpeg',
            'merek' => 'Battery Beanie',
            'deskripsi' => 'Ini Beanie Dengan Design Dragon',
            'harga' => 'Rp.150.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'sepatu',
            'image' => 'shoes1.jpeg',
            'merek' => 'Cartoon Art Shoes',
            'deskripsi' => 'Ini Sepatu Dengan Design Cartoon Art',
            'harga' => 'Rp.499.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'sepatu',
            'image' => 'shoes2.jpeg',
            'merek' => 'Cartoon Art Shoes',
            'deskripsi' => 'Ini Sepatu Dengan Design Cartoon Art',
            'harga' => 'Rp.499.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'sepatu',
            'image' => 'shoes3.jpeg',
            'merek' => 'Cartoon Art Shoes',
            'deskripsi' => 'Ini Sepatu Dengan Design Cartoon Art',
            'harga' => 'Rp.499.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'sepatu',
            'image' => 'shoes4.jpeg',
            'merek' => 'Cartoon Art Shoes',
            'deskripsi' => 'Ini Sepatu Dengan Design Cartoon Art',
            'harga' => 'Rp.499.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        
        Product::create([
            'kategori' => 'sepatu',
            'image' => 'shoes5.jpeg',
            'merek' => 'Cartoon Art Shoes',
            'deskripsi' => 'Ini Sepatu Dengan Design Cartoon Art',
            'harga' => 'Rp.499.000',
            'stok' => '80',
            'created_at' => time(),
            'updated_at' => time(),
        ]);
        

    }
}
