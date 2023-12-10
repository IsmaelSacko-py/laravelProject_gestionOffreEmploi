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
        Schema::create('employes', function (Blueprint $table) {
            $table->unsignedInteger("id")->autoIncrement();
            $table->string("nom", 100);
            $table->string("prenom", 100);
            $table->string("telephone", 50);
            $table->string("adresse", 100);
            $table->string("email", 100);
            $table->string("login", 100);
            $table->string("mot_de_passe", 100);
            $table->string("CV", 10);
            $table->unsignedInteger("etat");
            $table->unsignedInteger("idProfil");
            $table->foreign("idProfil")->references("id")->on("profils");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employes');
    }
};
