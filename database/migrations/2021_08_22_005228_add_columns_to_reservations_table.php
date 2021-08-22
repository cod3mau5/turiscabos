<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->longText('agency')->nullable()->after('numeroticket');
            $table->string('currency')->default('USD')->after('pricepaypal');
            $table->date('departuredate')->change();
            $table->time('departuretime')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservations', function (Blueprint $table) {
            $table->dropColumn(['agency','currency']);
            $table->string('departuredate')->nullable()->change();
            $table->string('departuretime')->nullable()->change();
        });
    }
}
