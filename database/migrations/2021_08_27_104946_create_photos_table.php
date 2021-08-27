<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('articles_id' )->unsigned()->nullable();;
            $table->foreign('articles_id')->references('id')->on('articles')->autoIncrement()->onDelete('cascade');
            $table->bigInteger('courses_id' )->unsigned()->nullable();;
            $table->foreign('courses_id')->references('id')->on('courses')->autoIncrement()->onDelete('cascade');
            $table->text('path');
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
        Schema::dropIfExists('photos');
    }
}
