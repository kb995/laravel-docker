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
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('cover')->default('default_cover.jpg')->nullable();
            $table->string('author', 100)->nullable();
            $table->string('isbn', 13)->nullable();
            $table->integer('page')->nullable();
            $table->string('publisher')->nullable();
            $table->string('published_at')->nullable();
            $table->text('description')->nullable();
            $table->text('category')->nullable();
            $table->integer('status')->default(0);
            $table->integer('rank')->default(0);
            $table->date('read_at')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
