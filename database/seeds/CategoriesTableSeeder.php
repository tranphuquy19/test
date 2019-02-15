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
                'title' => 'Tiếng Nhật',
                'image' => 'img/projects/project.jpg'
            ],
            [
                'title' => 'JLPT',
                'image' => 'img/projects/project.jpg'
            ],
            [
                'title' => 'Homework',
                'image' => 'img/projects/project.jpg'
            ],
            [
                'title' => 'Mini Test',
                'image' => 'img/projects/project.jpg'
            ],
            [
                'title' => 'Midle-term Test',
                'image' => 'img/projects/project.jpg'
            ],
            [
                'title' => 'End-term Test',
                'image' => 'img/projects/project.jpg'
            ]
        ]);
    }
}
