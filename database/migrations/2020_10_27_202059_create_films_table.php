<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {

            $table->bigIncrements('id'); // ID фильма

            $table->string('film_name')->nullable(); // Название фильма

            $table->string('film_link')->nullable(); // Сссылка для файла фильма

            $table->string('film_img_link')->nullable(); // Сссылка для картинки фильма

            $table->integer('film_amount')->nullable(); // Стоисомть фильма

            $table->integer('enable')->default(0); // Активация фильма
            $table->integer('status')->default(0); // Статусы фильма
            /*
                0 - не активен
            */
            $table->timestamp('created_at')->nullable(); // Дата создания
            $table->timestamp('updated_at')->nullable(); // Дата изменения
            $table->timestamp('deleted_at')->nullable(); // Дата удаления

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
