<?php

use MoonShine\Models\MoonshineUser;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->integer('system_id')->comment('Идентификатор');
            $table->string('name')->comment('Название');
            $table->integer('template')->default(1)->comment('Шаблон');
            $table->string('image')->nullable()->comment('Изображение');
            $table->json('data')->nullable()->comment('Данные');
            $table->boolean('is_publish')->default('0')->comment('Статус');
            $table->integer('sorting')->nullable()->comment('Сортировка');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
