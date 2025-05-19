<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
           [
            'category_name'=> 'Action',
            'description'=> 'Film dengan adegan-adengan penuh aksi dan ketegangan.',
            'created_at' => now(),
            'updated_at' => now(),
           ],
           [
             'category_name'=> 'Comdey',
            'description'=> 'Film yang bertujuan untuk menghibur dan mengundang tawa.',
            'created_at' => now(),
            'updated_at' => now(),
           ],
           [
             'category_name'=> 'Drama',
            'description'=> 'Film dengan adegan-adengan penuh aksi dan ketegangan.',
            'created_at' => now(),
            'updated_at' => now(),
           ],
           [
             'category_name'=> 'Sci-Fi',
            'description'=> 'Film dengan adegan-adengan penuh aksi dan ketegangan.',
            'created_at' => now(),
            'updated_at' => now(),
           ],
           [
             'category_name'=> 'Romance',
            'description'=> 'Film dengan adegan-adengan penuh aksi dan ketegangan.',
            'created_at' => now(),
            'updated_at' => now(),
           ],
        ]);
    }
}