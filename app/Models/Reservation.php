<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable =[
        'reservation',
        'name',
        'email',
        'phone',
        'passengers',
        'arrivaldate',
        'arrivaltime',
        'arrivalairline',
        'arrivalflight',
        'departuredate',
        'departuretime',
        'departureairline',
        'departureflight',
        'ocation',
        'comments',
        'selectedAirlineArrival',
        'selectedAirlineDeparture',
        'iconArrivalAirline',
        'iconDepartureAirline',
        'hotel',
        'hotelicon',
        'unit',
        'service',
        'destination',
        'pricenormal',
        'pricepaypal',
        'origin'
    ];
}
