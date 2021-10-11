<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Mail\SendMail;
use App\Models\Reservation;

use Illuminate\Http\Request;
use App\Exports\ReservationsExport;
use Illuminate\Support\Facades\Mail;
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
        if( $request['origin']== 'web'){

            $request['shoppingstop']=$request['shoppingstop']==='true'?1:0;
            $request['babysit']=$request['babysit']==='true'?1:0;
            $request['pricenormal']=preg_replace('/[^0-9]/', '', $request['pricenormal']);
            $request['pricenormal']= (int)$request['pricenormal'];
            $request['pricepaypal']= (int)$request['pricepaypal'];
            if($request['shoppingstop']==1){
                $request['pricenormal'] += 20;
                $request['pricepaypal'] += 20;
            }
            if($request['babysit']==1){
                $request['pricenormal'] += 20;
                $request['pricepaypal'] += 20;
            }

            if($request['unit'] == 'Private Sedan'){
                $request['passengers']= $request['passengerssuburban'];
            }elseif($request['unit'] == 'Private SUV'){
                $request['passengers']= $request['passengershiace'];
            }else{
                $request['passengers']= $request['passengerssprinter']; //case for Shuttle
            }
        }
        $request['pricenormal']==null ?  $request['pricenormal']=0.00 : $request['pricenormal']= $request['pricenormal'];
        $request['pricepaypal']==null ?  $request['pricepaypal']=0.00 : $request['pricepaypal']= $request['pricepaypal'];
        $request['pricecreditcard']==null ?  $request['pricecreditcard']=0.00 : $request['pricecreditcard']= $request['pricecreditcard'];
        $today=Carbon::now('America/Mazatlan')->format('Y-m-d');
        $request['reservation']= rand(1,100);
        $request['pricenormal'] = preg_replace('/[^0-9.]+/', '', $request['pricenormal']);
        $request['reservation']='TUR-'.$today.'-'.$request["reservation"];
        if($request['service'] == 'One Way' && $request['destination'] != 'Hotel - Airport'){
            $request['departuredate']=null;
            $request['departuretime']=null;
            $request['departureairline']=null;
            $request['departureflight']=null;
        }elseif($request['destination'] == 'Hotel - Airport'){
            $request['arrivaldate']=null;
            $request['arrivaltime']=null;
            $request['arrivalairline']=null;
            $request['arrivalflight']=null;
        }
        $validated= $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'reservation' => 'required|string',
            'phone' => 'required',
            'passengers'=> 'required|numeric'
        ]);

        if($validated){$reservation=Reservation::create($request->except('_token'));}

        if ($reservation) {
            Mail::to($request['email'])->send(new SendMail($request));
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
        if($request['service'] == 'One Way' && $request['destination'] != 'Hotel - Airport'){
            $request['departuredate']=null;
            $request['departuretime']=null;
            $request['departureairline']=null;
            $request['departureflight']=null;
        }elseif($request['destination'] == 'Hotel - Airport'){
            $request['arrivaldate']=null;
            $request['arrivaltime']=null;
            $request['arrivalairline']=null;
            $request['arrivalflight']=null;
        }
        $request['pricenormal']==null ?  $request['pricenormal']=0.00 : $request['pricenormal']= $request['pricenormal'];
        $request['pricepaypal']==null ?  $request['pricepaypal']=0.00 : $request['pricepaypal']= $request['pricepaypal'];
        $request['pricecreditcard']==null ?  $request['pricecreditcard']=0.00 : $request['pricecreditcard']= $request['pricecreditcard'];
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
        return (new ReservationsExport(null,null,null))->download('reservations_'.$date.'.xlsx');
    }
    public function exportUserExcel()
    {
        $date=date('Y-m-d H:i:s');
        return (new ReservationsUserExport)->download('reservations_'.$date.'.xlsx');
    }
    public function getReservations(Request $request){
        if($request->input('filter') == 'arrivalDates'){
            $startDate = $request->input('startDate');
            $endDate = $request->input('endDate');
            $reservations=Reservation::whereBetween('arrivaldate',[$startDate,$endDate])->get();

            if($reservations == '[]'){
                return redirect()->back()->withErrors(['message'=>'No hay reservas para ese rango de fechas']);
            }else{
                $date=date('Y-m-d H:i:s');
                return (new ReservationsExport($reservations,'ranges'))->download('reservations_'.$date.'.xlsx');
            }
        }else{
            $startDate = $request->input('startDepartureDate');
            $endDate = $request->input('endDepartureDate');
            $reservations=Reservation::whereBetween('departuredate',[$startDate,$endDate])->get();
            if($reservations == '[]'){
                return redirect()->back()->withErrors(['message'=>'No hay reservas para ese rango de fechas']);
            }else{
                $date=date('Y-m-d H:i:s');
                return (new ReservationsExport($reservations,'ranges'))->download('reservations_'.$date.'.xlsx');
            }
        }
    }
    public function getReservationsToday(){
        $today = Carbon::now('America/Mazatlan')->format('Y-m-d');
        $reservations=Reservation::where('arrivaldate',$today)->get();
        if($reservations == '[]'){
            return redirect()->back()->withErrors(['message'=>'No hay llegadas para hoy']);
        }else{
            $date=date('Y-m-d H:i:s');
            if(count($reservations) > 1){
                return (new ReservationsExport($reservations,'today'))->download('reservations_'.$date.'.xlsx');
            }else{
                return (new ReservationsExport($reservations,'today_only_one'))->download('reservations_'.$date.'.xlsx');
            }
        }
    }
    public function getReservationsDeparturesToday(){
        $today = Carbon::now('America/Mazatlan')->format('Y-m-d');
        $reservations=Reservation::where('departuredate',$today)->get();
        if($reservations == '[]'){
            return redirect()->back()->withErrors(['message'=>'No hay salidas para hoy']);
        }else{
            $date=date('Y-m-d H:i:s');
            if(count($reservations) > 1){
                return (new ReservationsExport($reservations,'today'))->download('reservations_'.$date.'.xlsx');
            }else{
                return (new ReservationsExport($reservations,'today_only_one'))->download('reservations_'.$date.'.xlsx');
            }
        }
    }
}
