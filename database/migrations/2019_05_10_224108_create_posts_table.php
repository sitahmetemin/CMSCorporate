<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('desc');
            $table->text('content');
            $table->string('slug');
            $table->string('video');
            $table->string('cover');
            $table->dateTime('startDate')->nullable();
            $table->dateTime('endDate')->nullable();
            $table->enum('status', ["active", "passive"]);
            $table->enum('type', ["content", "album", "contentWithAlbum"]);
            $table->unsignedBigInteger("menu_id")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign("menu_id")
                ->references("id")
                ->on("menus");

            $table->foreign("user_id")
                ->references("id")
                ->on("users");
        });
    }


    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
