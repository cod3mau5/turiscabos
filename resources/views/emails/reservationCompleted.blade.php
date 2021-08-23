<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"
    \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"> <html xmlns=\"http://www.w3.org/1999/xhtml\"> <head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
<title>Airport Baja Transportation</title>
</head>

<body>
    <table style="border: 2px solid #000; font-size: 14px; text-align: center; width: 800px;">
        <tr style="width: 796px\">
            <td colspan=2 style="background: {{url('images/backgrounds/header-banner.png')}} no-repeat; height:
                100px; width: 796px;"></td>
        </tr>
        <tr style="width: 796px\">
            <td colspan=2 style="border: 1px solid #000;">
                <h1 style="font-size: 14px;text-align: center;margin: 0;padding: 0;color: #000; width: 100%;">
                    Reservation Number: {{$request['reservation']}}</h1>
            </td>
        </tr>
        <tr style="width: 796px\">
            <td colspan=2 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 22px; text-align: center;
                width: 100%;">Dear <strong>{{$request['name']}}</strong> thanks for chosing us, for your transportation service.
            </td>
        </tr>
        <tr style="width: 796px\">
            <td colspan=2 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; text-align: center;
                width: 100%;">YOUR TRANSPORTATION IS CONFIRMED WITH US</td>
        </tr>
        <tr style="width: 796px\">
            <th colspan=2 style="background-color: #184C89; margin: 0; border: 1px solid #000; padding: 5px; font-size:
                14px; text-align: center; width: 100%;">CLIENT INFORMATION</th>
        </tr>
        <tr style="width: 796px; height: 30px;">
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px;
                line-height: 30px; width: 50%;"><strong>Name: </strong>{{$request['name']}}
            </td>
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px;
                line-height: 30px; width: 50%;"><strong>Email: </strong>{{$request['email']}}
            </td>
        </tr>
        <tr style="width: 796px; height: 30px;">
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px;
                line-height: 30px; width: 50%;"><strong>Phone: </strong>{{$request['phone']}}
            </td>
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; height: 30px;
                line-height: 30px; width: 50%;"><strong>Hotel:</strong> {{$request['hotel']}}
            </td>
        </tr>
        <tr style="width: 796px\">
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
                <strong>Travel type: </strong>{{$request['service']}}</td>
            @if($request['unit'] === 'Chevrolet Suburban')
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
                <strong>Passengers: </strong>{{$request['unit']}}</td>
        </tr>

        @elseif($request['unit'] === 'Toyota Hiace')
        <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
            <strong>Passengers: </strong>{{$request['unit']}}</td>
        </tr>

        @elseif($request['unit'] === 'Mercedes-Benz Sprinter')
        <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
            <strong>Passengers: </strong>{{$request['unit']}}</td>
        </tr>

        @endif
        <tr style="width: 796px\">
            <th colspan=2 style="background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size:
                14px; text-align: center; width: 100%;">ARRIVAL INFORMATION</th>
        </tr>
        <tr style="width: 796px\">
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
                <strong>Arrival: </strong>{{$request['arrivaldate'] }}- {{$request['arrivaltime']}}</td>
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
                <strong>Arrival Airline: </strong> {{$request['arrivalairline']}} - {{$request['arrivalflight']}}</td>
        </tr>

        @if($request['service'] === 'Round Trip')
            <tr style="width: 796px\">
                <th colspan=2 style="background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size:
                    14px; text-align: center; width: 100%;">DEPARTURE INFORMATION</th>
            </tr>
            <tr style="width: 796px\">
                <td style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
                    <strong>Departure: </strong>{{$request['departuredate']}} - {{$request['departuretime']}}</td>
                <td style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;"><strong>Departure
                        Airline: </strong> {{$request['departureairline']}} - {{$request['departureflight']}}</td>
            </tr>
        @endif
        <tr style="width: 796px\">
            <th colspan=2 style="background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size:
                14px; text-align: center; width: 100%;">ADITIONAL INFORMATION</th>
        </tr>
        <tr style="width: 796px\">
            <td colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
                <strong>Price: </strong>{{$request['pricenormal']}}</th>
            <th colspan=1 style="border: 1px solid #000; margin: 0;padding: 5px; font-size: 14px; width: 50%;">
                <strong>Vehicle:</strong> {{$request['unit']}}</td>
        </tr>
        <tr style="width: 796px\">
            <td colspan=2 style="border: 1px solid #000; padding: 5px; font-size: 14px; width: 100%;">
                <strong>Comments: </strong>{{$request['comments']}}</td>
        </tr>
        <tr style="width: 796px\">
            <th colspan=2 style="background-color: #184C89; border: 1px solid #000; margin: 0; padding: 5px; font-size:
                14px; text-align: center; width: 100%;">UPON ARRIVAL</th>
        </tr>
        <tr style="width: 796px\">
            <td colspan=2 style="border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center;
                width: 100%;">When you pass customs you will see a lot a poeple talking to you, thats a time share
                people, we don't work with them, and even outside the terminal you will see a airport taxis drivers
                trying to stop you (they will insist to go with them), please ignore all the people I will be there
                outside the terminal under umbrella 1 to 5, with our company logo holding. gratuite are not included but
                if considered that driver give you a good service at the end the gratuite are very welcome, its not your
                obligation but if you want to take care of him its very welcome.</td>
        </tr>
        <tr style="width: 796px\">
            <td colspan=2 style="border: 1px solid #000; margin: 0; padding: 5px; font-size: 14px; text-align: center;
                width: 100%;">Our phone number is +52 1 (624) 111 1111 and it will be a pleasure to assist you in your
                next visit to Los Cabos.</td>
        </tr>
    </table>
</body>

</html>
