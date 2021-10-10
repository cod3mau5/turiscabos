<?php

namespace App\Exports;

use App\Models\Reservation;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class ReservationsExport implements FromView, WithStrictNullComparison
{
    use Exportable;
    protected $reservations,$filterBy;

    public function __construct($reservations,$filterBy) {
            $this->reservations = $reservations;
            $this->filterBy=$filterBy;
    }

    public function view(): View
    {
        if($this->filterBy == 'ranges'){
            return view('exports.reservation',['reservations'=>$this->reservations]);
        }elseif($this->filterBy == 'today'){
            return view('exports.reservation',['reservations'=>$this->reservations]);
        }elseif($this->filterBy == 'today_only_one'){
            $reservation=$this->reservations->toArray();
            return view('exports.one_reservation',['reservations'=>$reservation[0]]);
        }
        else{
            return view('exports.reservation',['reservations'=>Reservation::all()]);
        }
    }


}
