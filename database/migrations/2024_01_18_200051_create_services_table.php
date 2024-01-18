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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MoonshineUser::class)
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->string('name')->comment('Название');
            $table->string('title')->nullable()->comment('Заголовок');
            $table->string('text')->nullable()->comment('Текст');
            $table->string('icon')->nullable()->comment('Иконка');
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
        Schema::dropIfExists('services');
    }
};
