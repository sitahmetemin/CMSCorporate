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
            $table->string('desc')->nullable();
            $table->text('content')->nullable();
            $table->string('slug');
            $table->string('video')->nullable();
            $table->string('cover')->nullable();
            $table->dateTime('startDate')->nullable();
            $table->dateTime('endDate')->nullable();
            $table->enum('status', ["active", "passive"])->default('active');
            $table->enum('type', ["content", "album", "contentWithAlbum"])->default('content');
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
