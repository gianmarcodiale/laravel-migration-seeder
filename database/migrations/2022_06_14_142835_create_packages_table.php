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
            $table->decimal('price', 6, 2)->unsigned();
            $table->string('location', 30);
            $table->text('description');
            $table->string('image');
            $table->tinyInteger('people')->unsigned();
            $table->string('departure_date', 30);
            $table->string('return_date', 30);
            $table->string('accomodation', 50);
            $table->boolean('flight')->default(false)->nullable($value = true);
            $table->boolean('car_rent')->default(false)->nullable($value = true);
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
