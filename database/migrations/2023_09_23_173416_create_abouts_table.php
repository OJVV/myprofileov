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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string("title")->default("Mechatronics Engineer & Developer");
            $table->string('website')->default("orlandovidaurre.net");
            $table->string('phone')->default("+49 15128022111");
            $table->string('origin_country')->default("Honduras");
            $table->string('country_of_residence')->default("Germany");
            $table->string('email')->default('vidaurre0438@gmail.com');
            $table->string('degree')->default("Bachelor of Mechatronics Engineering");
            $table->integer('age')->default(26);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
