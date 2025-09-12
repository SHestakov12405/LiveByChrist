<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string("surname", 50)->required();
            $table->string("name", 50)->required();
            $table->string("patronymic", 50)->nullable();
            $table->string("email")->required();
            $table->string("phone")->required();
            $table->string("church")->required();
            $table->enum('pol', ['man', 'woman'])->required();
            $table->foreignId('group_id')->references('id')->on('groups');
            $table->string('date_bird')->required();
            $table->integer('age')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participants');
    }
};
