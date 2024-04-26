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
        Schema::create('offres', function (Blueprint $table) {
            $table->id('id_offre');
            $table->unsignedBigInteger('id_Ent');
            $table->string('titre_poste');
            $table->text('description');
            $table->text('competences_requises'); 
            $table->date('date_publication');
            $table->timestamps();

            // Clé étrangère pour id_entreprise
            $table->foreign('id_Ent')->references('id_Ent')->on('entreprises')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};
