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
        Schema::create('bichos', function (Blueprint $table) {
            $table->id();
            $table->string("nome",50)->unique();
            $table->integer("idade");
            $table->string("cor");       
            $table->unsignedBigInteger('tipo_bicho_id');
            $table->foreign('tipo_bicho_id')->references('id')->on('tipo_bichos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bichos');
    }
};
