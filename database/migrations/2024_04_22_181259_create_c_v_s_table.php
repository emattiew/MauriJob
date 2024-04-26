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
        Schema::create('cvs', function (Blueprint $table) {
            $table->id('id_cv');
            $table->unsignedBigInteger('id_pos'); // Utiliser un type compatible avec la clé primaire de 'postulants'
            $table->foreign('id_pos')->references('id_pos')->on('postulants')->onDelete('cascade'); // Assurez-vous que 'id' est la clé primaire de 'postulants'
            $table->string('titre');
            $table->text('competences');
            $table->string('experience');
            $table->string('education');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_v_s');
    }
};
