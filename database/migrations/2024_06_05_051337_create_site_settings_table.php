<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();

            $table->string('site_name');
            $table->string('site_title')->nullable();
            $table->string('site_description')->nullable();

            $table->string('site_phone')->nullable();
            $table->string('site_email')->nullable();
            $table->string('site_address')->nullable();

            $table->string('site_map')->nullable();

            $table->string('facebook')->nullable();
            $table->string('youtube')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

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
        Schema::dropIfExists('site_settings');
    }
};
