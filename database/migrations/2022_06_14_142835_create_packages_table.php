<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->integer('price')->unsigned();
            $table->string('location', 50);
            $table->text('description');
            $table->string('image');
            $table->tinyInteger('people')->unsigned();
            $table->string('departure_date', 30);
            $table->string('return_date', 30);
            $table->string('accomodation', 100);
            $table->string('flight', 30);
            $table->string('car_rent', 30);
            $table->timestamps();
        });
    }

    /*
    PACKAGES

    id
    price
    location
    description
    image
    people
    departure_date
    return_date
    accomodation
    flight
    car_rent
    */


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
