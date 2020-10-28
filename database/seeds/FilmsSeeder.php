<?php

use Illuminate\Database\Seeder;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data[] = [
            'film_name' => "Фильм 1",
            'film_link' => Str::random(10),
            'film_img_link' => Str::random(10),
            'film_amount' => rand(1000, 5000),
            'enable' => 0,
            'status' => 0,
            'updated_at' => null,
            'created_at' => date("Y-m-d H:i:s"),
            'deleted_at' => null,
        ];

        $data[] = [
            'film_name' => "Фильм 2",
            'film_link' => Str::random(10),
            'film_img_link' => Str::random(10),
            'film_amount' => rand(1000, 5000),
            'enable' => 0,
            'status' => 0,
            'updated_at' => null,
            'created_at' => date("Y-m-d H:i:s"),
            'deleted_at' => null,
        ];

        $data[] = [
            'film_name' => "Фильм 3",
            'film_link' => Str::random(10),
            'film_img_link' => Str::random(10),
            'film_amount' => rand(1000, 5000),
            'enable' => 0,
            'status' => 0,
            'updated_at' => null,
            'created_at' => date("Y-m-d H:i:s"),
            'deleted_at' => null,
        ];

        DB::table('films')->insert($data);
    }
}
