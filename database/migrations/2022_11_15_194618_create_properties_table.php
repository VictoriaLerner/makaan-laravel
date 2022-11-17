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

        Schema::create('properties', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name', 800);
            $table->string('keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->bigInteger('price');
            $table->string('property_type', 100);
            $table->longText('description');
           $table->string('full_address', 200)->nullable();
            $table->integer('bedrooms_count')->nullable();
            $table->integer('bathrooms_count')->nullable();
            $table->bigInteger('living_area')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
