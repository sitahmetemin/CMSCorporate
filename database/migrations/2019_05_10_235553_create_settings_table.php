<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('menu_id')->nullable();
            $table->integer('slider_id')->nullable();
            $table->boolean('isComingSoon')->default(0)->nullable();
            $table->string('title');
            $table->string('description');
            $table->string('keywords');
            $table->string('copyright');
            $table->string('site_url');
            $table->string('slogan')->nullable();
            $table->string('logo')->nullable();
            $table->string('lang')->nullable();
            $table->string('tel1')->nullable();
            $table->string('tel2')->nullable();
            $table->string('gsm1')->nullable();
            $table->string('gsm2')->nullable();
            $table->string('fax1')->nullable();
            $table->string('fax2')->nullable();
            $table->string('mail1')->nullable();
            $table->string('mail2')->nullable();
            $table->string('adres')->nullable();
            $table->string('ilce')->nullable();
            $table->string('il')->nullable();
            $table->text('maps')->nullable();
            $table->string('analystic')->nullable();
            $table->string('recapctha')->nullable();
            $table->string('smtphost')->nullable();
            $table->string('smtpuser')->nullable();
            $table->string('smtppassword')->nullable();
            $table->string('smtpport')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('vimeo')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('pinterest')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
