<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReservationsExport;


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
            // $message .= "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n";
            // $message .= "<html xmlns=\"http://www.w3.org/1999/xhtml\">\n";
            // $message .= "<head>\n";
            // $message .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\n";
            // $message .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>\n";
            // $message .= "<title>Airport Baja Transportation</title>\n";
            // $message .= "</head>\n";
            // $message .= "<body>\n";
            // $message .= "<table style=\"border: 2px solid #000; font-size: 14px; text-align: center; width: 800px;\">\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"background: url($homepage../images/backgrounds/header-banner.png) no-repeat; height: 100px; width: 796px;\"></td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 1px solid #000;\"><h1 style=\"font-size: 14px;text-align: center;margin: 0;padding: 0;color: #000; width: 100%;\">Reservation Number: TUR-$arrivaldate-$reservation</h1></td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 22px; text-align: center; width: 100%;\">Dear <strong>$name</strong> thanks for chosing us, for your transportation service.</td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; text-align: center; width: 100%;\">YOUR TRANSPORTATION IS CONFIRMED WITH US</td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #184C89; margin: 0; border: 1px solid #000; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">CLIENT INFORMATION</th></tr>\n";
            // $message .= "<tr style=\"width: 796px; height: 30px;\"><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Name: </strong>$name</td><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Email: </strong>$email</td></tr>\n";
            // $message .= "<tr style=\"width: 796px; height: 30px;\"><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Phone: </strong>$phone</td><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px; line-height: 30px; width: 50%;\"><strong>Hotel:</strong> $hotel</td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Travel type: </strong>$service</td>\n";
            // if($unit === 'Chevrolet Suburban'){
            //   $message .= "<td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Passengers: </strong>$passengerssuburban</td></tr>\n";
            // }
            // if($unit === 'Toyota Hiace'){
            //   $message .= "<td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Passengers: </strong>$passengershiace</td></tr>\n";
            // }
            // if($unit === 'Mercedes-Benz Sprinter'){
            //   $message .= "<td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Passengers: </strong>$passengerssprinter</td></tr>\n";
            // }
            // $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">ARRIVAL INFORMATION</th></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Arrival: </strong>$arrivaldate - $arrivaltime</td><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Arrival Airline: </strong> $arrivalairline - $arrivalflight</td></tr>\n";

            // if($service === 'Round Trip') {
            //     $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">DEPARTURE INFORMATION</th></tr>\n";
            //     $message .= "<tr style=\"width: 796px\"><td style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Departure: </strong>$departuredate - $departuretime</td><td style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Departure Airline: </strong> $departureairline - $departureflight</td></tr>\n";
            // }
            // $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">ADITIONAL INFORMATION</th></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Price: </strong>$pricenormal</th><th colspan=1 style=\"border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;\"><strong>Vehicle:</strong> $unit</td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 1px solid #000; padding: 5px; font-size: 14px; width: 100%;\"><strong>Comments: </strong>$comments</td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><th colspan=2 style=\"background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">UPON ARRIVAL</th></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">When you pass customs you will see a lot a poeple talking to you, thats a time share people, we don't work with them, and even outside the terminal you will see a airport taxis drivers trying to stop you (they will insist to go with them), please ignore all the people I will be there outside the terminal under umbrella 1 to 5, with our company logo holding. gratuite are not included but if considered that driver give you a good service at the end the gratuite are very welcome, its not your obligation but if you want to take care of him its very welcome.</td></tr>\n";
            // $message .= "<tr style=\"width: 796px\"><td colspan=2 style=\"border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center; width: 100%;\">Our phone number is +52 1 (624) 111 1111 and it will be a pleasure to assist you in your next visit to Los Cabos.</td></tr>\n";
            // $message .= "</table></body></html>\n";

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
        //
    }
    public function exportExcel()
    {
        return Excel::download(new ReservationsExport, 'reservations.xlsx');
    }
}
