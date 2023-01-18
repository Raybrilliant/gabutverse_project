<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('movieName');
            $table->string('slug');
            $table->integer('count');
            $table->string('originalName');
            $table->date('movieYear');
            $table->float('rating');
            $table->float('popularity');
            $table->string('genres');
            $table->string('language');
            $table->longText('overview');
            $table->string('posterPath');
            $table->string('backdropPath');
            $table->string('trailer');
            $table->string('watchLink');
            $table->string('downloadLink')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
};
