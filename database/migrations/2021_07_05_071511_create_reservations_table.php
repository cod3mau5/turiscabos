<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            //user info
            $table->string('reservation');
            $table->string('name',20);
            $table->string('email');
            $table->integer('phone');
            $table->integer('passengers');
            //arrival info
            $table->date('arrivaldate')->nullable();
            $table->time('arrivaltime')->nullable();
            $table->string('arrivalairline')->nullable();
            $table->string('arrivalflight')->nullable();
            $table->string('departuredate')->nullable();
            $table->string('departuretime')->nullable();
            $table->string('departureairline')->nullable();
            $table->string('departureflight')->nullable();
            $table->string('ocation')->nullable();
            $table->string('comments')->nullable();
            //summary
            $table->string('selectedAirlineArrival')->nullable();
            $table->string('selectedAirlineDeparture')->nullable();
            $table->string('iconArrivalAirline')->nullable();
            $table->string('iconDepartureAirline')->nullable();
            $table->string('hotel')->nullable();
            $table->string('hotelicon')->nullable();
            $table->string('unit');
            $table->string('service');
            $table->string('destination');
            $table->float('pricenormal',8,2);
            $table->float('pricepaypal',8,2);

            //platform details
            $table->string('origin');

            $table->timestamps();
            // homepage: https://turiscabos.netlify.app
            // passengerssuburban: 1
            // passengershiace: 1
            // passengerssprinter: 1
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
