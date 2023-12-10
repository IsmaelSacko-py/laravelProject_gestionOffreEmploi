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
            $table->unsignedInteger("id")->autoIncrement();
            $table->string("numero", 100);
            $table->string("date_creation", 100);
            $table->string("poste", 100);
            $table->text("description");
            $table->unsignedInteger("etat");
            $table->text("competence");
            $table->string("type", 20);
            $table->date("date_publication");
            $table->timestamps();
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
