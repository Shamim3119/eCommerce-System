<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('celebrities', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('designation');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);

            $table->unsignedTinyInteger('celebrity_type')
                ->comment('1 = New Celebrity, 2 = Old Celebrity');

            $table->string('image')->nullable();

            $table->foreignId('celebrity_type_id')
                ->constrained('celebrity_types')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('celebrities');
    }
};