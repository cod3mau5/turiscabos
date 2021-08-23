<table>
    <thead>
        <tr>
            <td style="background-color:#fdc500;width:25px;"><b>NOMBRE DEL CLIENTE</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>CORREO ELECtdONICO</b></td>
            <td style="background-color:#fdc500;width:15px;"><b>TELEFONO</b></td>
            <td style="background-color:#fdc500;width:15px;"><b>PERSONAS</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>SERVICIO</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>TIPO DE SERVICIO</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>FECHA LLEGADA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>HORA LLEGADA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>VUELO LLEGADA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>FECHA SALIDA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>HORA SALIDA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>VUELO SALIDA</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>DESTINO</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>CHOFER</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>UNIDAD</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>PRECIO NORMAL</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>PRECIO PAYPAL</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>COMENTARIOS</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr>

                <td>{{$reservation->name}}</td>
                <td>{{$reservation->email}}</td>
                <td>{{$reservation->phone}}</td>
                <td>{{$reservation->passengers}}</td>
                <td>{{$reservation->service}}</td>
                <td>{{$reservation->destination}}</td>
                <td>{{$reservation->arrivaldate}}</td>
                <td>{{$reservation->arrivaltime}}</td>
                <td>{{$reservation->arrivalflight}}</td>
                <td>{{$reservation->departuredate}}</td>
                <td>{{$reservation->departuretime}}</td>
                <td>{{$reservation->departureflight}}</td>
                <td>{{$reservation->hotel}}</td>
                <td>{{$reservation->nombrechofer}}</td>
                <td>{{$reservation->unit}}</td>
                <td>{{$reservation->pricenormal}}</td>
                <td>{{$reservation->pricepaypal}}</td>
                <td>{{$reservation->comments}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
