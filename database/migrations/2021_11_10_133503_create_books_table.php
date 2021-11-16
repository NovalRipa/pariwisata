<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('author_id')->unsigned();
            $table->integer('amount')->unsigned();
            $table->string('cover')->nullable();

            //membuat fk author_id
            //yang mengacu kepada field 'id' yang ada
            //di dalam table 'authors'
            $table->foreign('author_id')->references('id')
                ->on('authors')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
}
