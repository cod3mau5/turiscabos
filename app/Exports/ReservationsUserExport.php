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
class ReservationsUserExport implements FromView
{
    use Exportable;
    public function view(): View
    {
        return view('exports.reservation_user',['reservations'=>Reservation::all()]);
    }
    // public function view(): View
    // {
    //     return view('exports.reservation',['reservations'=>Reservation::all()]);
    // }
}
