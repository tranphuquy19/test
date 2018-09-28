<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
            'title' => 'Toán',
            'image' => 'img/projects/project.jpg'
            ],
            [
            'title' => 'Văn',
            'image' => 'img/projects/project.jpg'
            ],
            [
            'title' => 'Anh',
            'image' => 'img/projects/project.jpg'
            ],
            [
            'title' => 'Sử',
            'image' => 'img/projects/project.jpg'
            ],       
            [
            'title' => 'Địa',
            'image' => 'img/projects/project.jpg'
            ] 
        ]);
    }
}
