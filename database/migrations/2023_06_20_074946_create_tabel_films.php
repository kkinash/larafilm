<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    { //filmid, titel, omschrijving, genreid, jaar
        Schema::create('films', function (Blueprint $table) {
            $table->bigIncrements('filmid');
            $table->string('titel', 255);
            $table->text('omschrijving');
            $table->unsignedBigInteger('genre_genreid');
            $table->bigInteger('jaar');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('genre_genreid')->references('genreid')->on('genres');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};