<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Reservation;
use Illuminate\Http\Request;

use App\Exports\ReservationsExport;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReservationsUserExport;


class ReservationController extends Controller
{
    public function index(){
        $reservations=Reservation::get()->all();
        foreach($reservations as $reservation){
            $reservation->setAttribute('editRoute', route('reservations.edit',$reservation->id));
            $reservation->setAttribute('updateRoute', route('reservations.update',$reservation->id));
            $reservation->setAttribute('deleteRoute', route('reservations.destroy',$reservation->id));
        }
        return $reservations;
    }
    public function create(){
        return view('reservations.sales.app_create');
    }
    public function store(Request $request)
    {
        if(auth()->user()->role !== 'admin'){
            if(!$request['nombrevendedor'] && !$request['nombrechofer'] || $request['origin']== 'web'){
                if($request['unit'] == 'Private Sedan'){
                    $request['passengers']= $request['passengerssuburban'];
                }elseif($request['unit'] == 'Private SUV'){
                    $request['passengers']= $request['passengershiace'];
                }else{
                    $request['passengers']= $request['passengerssprinter']; //case for Shuttle
                }
            }
        }

        $request['reservation']= rand(1,100);
        $request['pricenormal'] = preg_replace('/[^0-9.]+/', '', $request['pricenormal']);
        if($request['service'] == 'One Way'){
            $request['departuredate']=null;
            $request['departuretime']=null;
            $request['departureairline']=null;
            $request['departureflight']=null;
        }
        $validated= $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'reservation' => 'required|numeric',
            'phone' => 'required',
            'passengers'=> 'required|numeric'
        ]);
        if($validated){$reservation=Reservation::create($request->except('_token'));}

        if ($reservation) {
            Mail::to($request['email'])->send(new SendMail($request));
            // $success = @mail($to, $subject, $message, $headers);

            $response = array();
            $response[0] = array(
                'response' => 'success'
            );

            return json_encode($response);

        } else {
            $response = array();
            $response[0] = array(
                'response' => 'error'
            );

            return json_encode($response);
        }

    }
    public function edit(Reservation $reservation)
    {
        $reservation->setAttribute('updateRoute', route('reservations.update',$reservation->id));
        return $reservation;
    }

    public function update(Request $request, Reservation $reservation)
    {
        if($request['service'] == 'One Way'){
            $request['departuredate']=null;
            $request['departuretime']=null;
            $request['departureairline']=null;
            $request['departureflight']=null;
        }
        $reservation->update($request->except('_token'));
    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
    }
    public function  getTransfers(){
        return json_decode(file_get_contents(storage_path('app/transfers.json')), true);
    }
    public function exportExcel()
    {
        $date=date('Y-m-d H:i:s');
        // return Excel::download(new ReservationsExport, 'reservations.xlsx');
        return (new ReservationsExport)->download('reservations_'.$date.'.xlsx');
    }
    public function exportUserExcel()
    {
        $date=date('Y-m-d H:i:s');
        return (new ReservationsUserExport)->download('reservations_'.$date.'.xlsx');
    }

}
