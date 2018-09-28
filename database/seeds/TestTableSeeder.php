<?php

use Illuminate\Database\Seeder;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            [
                'title' => 'Dạy Văn',
                'id_categories' => 1,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy toán',
                'id_categories' => 2,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy Địa',
                'id_categories' => 3,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy Địa',
                'id_categories' => 3,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy Văn',
                'id_categories' => 4,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy toán',
                'id_categories' => 2,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy Địa',
                'id_categories' => 5,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy toán',
                'id_categories' => 1,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy Địa',
                'id_categories' => 3,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy Văn',
                'id_categories' => 1,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Dạy toán',
                'id_categories' => 1,
                'auth' => 1,
                'questions' => '',
                'image' => 'img/projects/project.jpg',
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
