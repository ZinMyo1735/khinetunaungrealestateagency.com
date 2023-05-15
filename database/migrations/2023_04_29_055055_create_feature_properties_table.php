<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feature_properties', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id');
            $table->string('card_title_1');
            $table->string('card_title_2');
            $table->string('post_title');
            $table->longText('header_text');
            $table->string('body_text_1');
            $table->string('body_text_2');
            $table->string('body_text_3');
            $table->string('body_text_4');
            $table->string('price');
            $table->string('dimension');
            $table->integer('master_bedroom');
            $table->integer('double_bedroom');
            $table->integer('single_bedroom');
            $table->integer('baths');
            $table->string('type');
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('image_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_properties');
    }
};
