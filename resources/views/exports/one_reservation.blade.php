<table>
    <thead>
        <tr>
            <td style="background-color:#fdc500;width:25px;"><b>NOMBRE DEL CLIENTE</b></td>
            <td style="background-color:#fdc500;width:25px;"><b>CORREO ELECTRONICO</b></td>
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
            <tr>
                <td>{{$reservations['name']}}</td>
                <td>{{$reservations['email']}}</td>
                <td>{{$reservations['phone']}}</td>
                <td>{{$reservations['passengers']}}</td>
                <td>{{$reservations['service']}}</td>
                <td>{{$reservations['destination']}}</td>
                <td>{{$reservations['arrivaldate']}}</td>
                <td>{{$reservations['arrivaltime']}}</td>
                <td>{{$reservations['arrivalflight']}}</td>
                <td>{{$reservations['departuredate']}}</td>
                <td>{{$reservations['departuretime']}}</td>
                <td>{{$reservations['departureflight']}}</td>
                <td>{{$reservations['hotel']}}</td>
                <td>{{$reservations['nombrechofer']}}</td>
                <td>{{$reservations['unit']}}</td>
                <td>{{$reservations['pricenormal']}}</td>
                <td>{{$reservations['pricepaypal']}}</td>
                <td>{{$reservations['comments']}}</td>
            </tr>
    </tbody>
</table>
