<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

use App\Exports\ReservationsExport;
use App\Models\Reservation;
use App\Mail\SendMail;


class ReservationController extends Controller
{
    public function index(){
        $reservations=Reservation::get()->all();
        foreach($reservations as $reservation){
            $reservation->setAttribute('editRoute', route('reservations.edit',$reservation->id));
            $reservation->setAttribute('deleteRoute', route('reservations.destroy',$reservation->id));
        }
        return $reservations;
    }
    public function create(){
        return view('reservations.sales.app_create');
    }
    public function store(Request $request)
    {
        // $headers = '';
        // $message = '';
        if($request['unit'] == 'Chevrolet Suburban'){
            $request['passengers']= $request['passengerssuburban'];
        }elseif($request['unit'] == 'Toyota Hiace'){
            $request['passengers']= $request['passengershiace'];
        }else{
            $request['passengers']= $request['passengerssprinter'];
        }
        $request['reservation']= rand(1,100);
        $request['pricenormal'] = preg_replace('/[^0-9.]+/', '', $request['pricenormal']);
        $validated= $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'reservation' => 'required|numeric',
            'phone' => 'required',
            'passengers'=> 'required|numeric'
        ]);
        if($validated)
            Reservation::create($request->except('_token'));



        // $headers .= "From: sistema@turiscabos.com \r\n";
        // $headers .= "MIME-Version: 1.0\r\n";
        // $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        // $to = "turiscabos@gmail.com, $email";
        // $subject = "Turiscabos Reservation";
        $validationOK=true;

        if ($validationOK) {
            Mail::to($request['email'])->send(new SendMail($request));

            // $success = @mail($to, $subject, $message, $headers);


            header('Access-Control-Allow-Origin: *');
            header('Content-type: application/json');
            $response = array();
            $response[0] = array(
                'response' => 'success'
            );

            return json_encode($response);

        } else {
            header('Access-Control-Allow-Origin: *');
            header('Content-type: application/json');
            $response = array();
            $response[0] = array(
                'response' => 'error'
            );

            return json_encode($response);
        }

    }

    public function show(Reservation $reservation)
    {
        //
    }


    public function edit(Reservation $reservation)
    {
        $reservation->setAttribute('updateRoute', route('reservations.update',$reservation->id));
        return $reservation;
    }

    public function update(Request $request, Reservation $reservation)
    {
        //
    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
    }
    public function exportExcel()
    {
        return Excel::download(new ReservationsExport, 'reservations.xlsx');
    }
}
