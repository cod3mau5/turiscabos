<table>
    <thead>
        <tr>
            <th style="background-color:#fdc500;width:25px;"><b>NOMBRE DEL CLIENTE</b></th>
            <th style="background-color:#fdc500;width:15px;"><b>PERSONAS</b></th>
            <th style="background-color:#fdc500;width:15px;"><b>FECHA LLEGADA</b></th>
            <th style="background-color:#fdc500;width:10px;"><b>HORA LLEGADA</b></th>
            <td style="background-color:#fdc500;width:20px;"><b>VUELO LLEGADA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>FECHA SALIDA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>HORA SALIDA</b></td>
            <td style="background-color:#fdc500;width:20px;"><b>VUELO SALIDA</b></td>
            <th style="background-color:#fdc500;width:25px;"><b>DESTINO</b></th>
            <th style="background-color:#fdc500;width:25px;"><b>SERVICIO</b></th>
            <th style="background-color:#fdc500;width:20px;"><b>CHOFER</b></th>
            <th style="background-color:#fdc500;width:25px;"><b>UNIDAD</b></th>
            <td style="background-color:#fdc500;width:25px;"><b>PRECIO NORMAL</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>PRECIO PAYPAL</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>COMENTARIOS</b></td>
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $reservation)
            <tr>
                <td>{{$reservation->name}}</td>
                <td>{{$reservation->passengers}}</td>
                <td>{{$reservation->arrivaldate}}</td>
                <td>{{$reservation->arrivaltime}}</td>
                <td>{{$reservation->arrivalflight}}</td>
                <td>{{$reservation->departuredate}}</td>
                <td>{{$reservation->departuretime}}</td>
                <td>{{$reservation->departureflight}}</td>
                <td>{{$reservation->hotel}}</td>
                <td>{{$reservation->destination}}</td>
                <td>{{$reservation->nombrechofer}}</td>
                <td>{{$reservation->unit}}</td>
                <td>{{$reservation->pricenormal}}</td>
                <td>{{$reservation->pricepaypal}}</td>
                <td>{{$reservation->comments}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
