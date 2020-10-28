<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$this->call(CountriesSeeder::class);
        //$this->call(TimeZonesSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(FilmsSeeder::class);
        //$this->call(AccessesSeeder::class);

        // Запускаем фабрику и генерируем 10 юзеров
        factory(\App\Models\User::class, 10)->create()->each(function ($user){

            factory(\App\Models\Users\Programs::class, 1)->create()->each(function ($program) use ($user){

                // Запускаем фабрику и генерируем по рандому задачи
                factory(\App\Models\Bot\Jobs::class, rand(2,6))->make()->each(function($jobs) use ($program, $user){
                    $jobs->program_id = $program->id;
                    $jobs->user_id = $user->id;
                    $jobs->save();

                    // Запускаем фабрику по логам
                    factory(\App\Models\Bot\Logs::class, 1)->make()->each(function ($logs) use ($jobs){
                        $logs->job_id = $jobs->id;
                        $logs->save();
                    });

                });

            });

        });

    }
}
