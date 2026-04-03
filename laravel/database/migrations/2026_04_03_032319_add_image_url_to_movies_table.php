<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageUrlToMoviesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * So I created this migration and added a new column "image_url" to the movies table
     *  This will allow me to store the path to the image for each movie
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->string('image_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * The idea here is that in case the migration is rolled back
     * this will remove the image_url column
     * 
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('image_url');
        });
    }
}
