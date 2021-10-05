<?php

namespace App\Exports;

use App\Models\Reservation;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

// class ReservationsExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Reservation::all();
//     }
// }
class ReservationsExport implements FromView
{
    use Exportable;
    protected $startDate,$endDate;

    function __construct($startDate,$endDate,$today) {
            $this->startDate = $startDate;
            $this->endDate = $endDate;
            $this->today = $today;
    }
    public function view(): View
    {
        // return $this->startDate . ' ' . $this->endDate . ' ' . $this->today;
        if($this->startDate && $this->endDate){
            $reservations=Reservation::whereBetween('arrivaldate',array($this->startDate,$this->endDate))->get();
            // if($reservations->isEmpty()){
            //     return redirect()->back()->withErrors(['message'=>'No hay reservas para ese rango de fechas']);
            // }else{
            //     return view('exports.reservation',compact($reservations));
            // }
            return view('exports.reservation',['reservations'=>$reservations]);

        }elseif($this->today){
            return view('exports.reservation',['reservations'=>Reservation::where('arrivaldate',$this->today)->get()]);
        }else{
            return view('exports.reservation',['reservations'=>Reservation::all()]);
        }
    }

}
