<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('platforms_id' )->unsigned();
            $table->foreign('platforms_id')->references('id')->on('platforms')->autoIncrement()->onDelete('cascade');
            $table->string('title');
            $table->longText('info');
            $table->integer('status')->nullable();
            $table->string('photo')->nullable();
            $table->integer('number_videos')->nullable();
            $table->string('url');
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
        Schema::dropIfExists('courses');
    }
}
