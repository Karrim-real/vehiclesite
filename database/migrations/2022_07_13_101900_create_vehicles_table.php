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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transmission_id');
            $table->unsignedBigInteger('body_id');
            $table->unsignedBigInteger('drive_id');
            $table->unsignedBigInteger('makes_id');
            $table->unsignedBigInteger('models_id');
            $table->string('year');
            $table->string('color');
            $table->string('capacity');
            $table->longText('description')->nullable;
            $table->string('fuel');
            $table->string('features');
            $table->string('main_image');
            $table->foreign('transmission_id')->references('id')->on('transmission')->onDelete('cascade');
            $table->foreign('body_id')->references('id')->on('body')->onDelete('cascade');
            $table->foreign('drive_id')->references('id')->on('drive')->onDelete('cascade');
            $table->foreign('makes_id')->references('id')->on('makes')->onDelete('cascade');
            $table->foreign('models_id')->references('id')->on('models')->onDelete('cascade');
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
        Schema::dropIfExists('vehicles');
    }
};
