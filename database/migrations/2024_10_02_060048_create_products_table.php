<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Запустите миграцию
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();//автоинкрементный 
            $table->string("name");//название
            $table->text('description');//описание
            $table->decimal('price', 8, 2);//цена
            $table->integer('stock');//коллво на складе

            $table->timestamps();
        });
    }

    /**
     * Отмените миграцию в обратном порядке
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
