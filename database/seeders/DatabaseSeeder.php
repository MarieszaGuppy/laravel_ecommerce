<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Naufal Tsani Arrahim',
            'email' => 'Naufallopayy25@gmail.com',
            'username' => 'NaufalTA',
            'password' => Hash::make('rahasia'),
        ]);

        $this->call(ArticleSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
