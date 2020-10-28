<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobiles', function (Blueprint $table) {

            $table->bigIncrements('id'); // ID Мобилы

            $table->integer('user_id')->default(0); // ID Юзера к которому будет привязан телефон

            $table->string('name', 255); // Название телефона
            $table->string('secret_key', 255); // Секретный ключ

            $table->integer('seances_id')->nullable(); // ID сеанса

            $table->integer('enable')->default(1); // Активация телефона
            $table->integer('status')->default(0); // Статусы
            /*
                0 - не активен
                1 - выбран для сеанса
                2 - сеанс запущен
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
        Schema::dropIfExists('mobiles');
    }
}
