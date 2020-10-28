<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {

            $table->bigIncrements('id'); // ID сеанса

            $table->integer('user_id')->default(0); // ID Юзера к которому будет привязан сеанс

            $table->integer('film_id')->default(0); // ID Фильма для сеанса

            $table->integer('seances_amount')->default(0); // Стоимость сеанса

            $table->integer('enable')->default(0); // Активация сеанса
            $table->integer('status')->default(0); // Статусы сеанса
            /*
                0 - не активен
                1 - сеанс создан
                2 - сеанс начат
                3 - сеанс на паузе
                4 - сеанс завершен
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
        Schema::dropIfExists('seances');
    }
}
