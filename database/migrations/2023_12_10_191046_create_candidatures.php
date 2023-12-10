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
        Schema::create('candidatures', function (Blueprint $table) {
            $table->unsignedInteger("id")->autoIncrement();
            $table->unsignedInteger("idOffre");
            $table->unsignedInteger("idEmploye");
            $table->foreign("idOffre")->references("id")->on("offres");
            $table->foreign("idEmploye")->references("id")->on("employes");
            $table->date("date_candidature");
            $table->unsignedInteger("etat");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidatures');
    }
};
