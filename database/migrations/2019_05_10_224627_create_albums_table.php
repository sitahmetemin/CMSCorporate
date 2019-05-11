<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path');
            $table->integer('order');
            $table->unsignedBigInteger('post_id')->nullable();
            $table->unsignedBigInteger('album_id')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("post_id")
                ->references("id")
                ->on("posts");

            $table->foreign("album_id")
                ->references("id")
                ->on("albums");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
