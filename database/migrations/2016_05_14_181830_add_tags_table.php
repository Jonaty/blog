<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
        /*tabla pivote */
        Schema::create('article_tag', function(Blueprint $table)
        {
            $table->increments('id');
            /*Llaves foraneas */
            $table->integer('article_id')->unsigned();
            $table->integer('tag_id')->unsigned();

            /*Relacion de las llaves foraneas de la tabla pivote */
            $table->foreign('article_id')->references('id')->on('articles');
            $table->foreign('tag_id')->references('id')->on('tags');
            
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
        Schema::drop('tags');
    }
}
