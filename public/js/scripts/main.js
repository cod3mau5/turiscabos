var airlines = null,
    cars = null,
    unit = null,
    selectedZone = null,
    selectedHotel = null,
    selectedService = null,
    selectedUnit = null,
    selectedArrivalDate = null,
    selectedArrivalTime = null,
    selectedArrivalAirline = null,
    selectedArrivalFlight = null,
    selectedDepartureDate = null,
    selectedDepartureTime = null,
    selectedDepartureAirline = null,
    selectedDepartureFlight = null,
    selectedAirlineArrival = '../images/icons/airlines/aeromexico.jpg',
    selectedAirlineDeparture = '../images/icons/airlines/aeromexico.jpg',
    selectedPassengerSuburban = null,
    selectedPassengerHiace = null,
    selectedPassengerSprinter = null,
    selectedName = null,
    selectedPhone = null,
    selectedEmail = null,
    hotelicon = null,
    pricePaypal = null;

$( document ).ready(function() {
    function getPosition(unit) {
        for(var car in cars) {
            if( cars[car].name === unit) return car;
        }
        return -1;
    }
    function getPositionAirline(airline) {
        for(var plane in planes) {
            if( planes[plane].name === airline) return plane;
        }
        return -1;
    }
    function getPositionOcation(special) {
        for(var ocation in ocations) {
            if( ocations[ocation].name === special) return ocation;
        }
        return -1;
    }
    function valEmail(email){
        console.log(' - function valEmail: '+email);
        emailRegex=/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
        resEmail=emailRegex.test(email);
        resEmail=resEmail==true?1:0;
        console.log(' - Resultado Email: '+resEmail);
        return resEmail;
    }
    function valTel(telefono) {
        var telefono=telefono;
        var respTel;
        console.log(' - function valTel: '+telefono)
        var regexRepeat = /^(?!.*(.)\1{6})/;
        telefono = telefono.replace(/ /g, '');
        telefono = telefono.replace(/\D/g, '');
        var resRepeat = regexRepeat.test(telefono);
        respTel = (telefono.length == 10 && resRepeat == true) ? 1 : 0; console.log(' - Resultado Telefono: '+respTel);
        return respTel;
    }

    $( "#reserve-suburban" ).click(function() {
        $(".modal-body img#carimage").attr("src","../images/units/suburban.png");
        $("h4#modalLabelSmall").html(`Private Sedan`);
        unit = 'Private Sedan';
        $("#suburban-capacity").css("display", "block");
        $("#hiace-capacity").css("display", "none");
        $("#sprinter-capacity").css("display", "none");
    });

    $( "#reserve-hiace" ).click(function() {
        $(".modal-body img#carimage").attr("src","../images/units/hiace.png");
        $("h4#modalLabelSmall").html(`Private SUV`);
        unit = 'Private SUV';
        $("#hiace-capacity").css("display", "block");
        $("#suburban-capacity").css("display", "none");
        $("#sprinter-capacity").css("display", "none");
    });

    $( "#reserve-sprinter" ).click(function() {
        $(".modal-body img#carimage").attr("src","../images/units/sprinter.png");
        $("h4#modalLabelSmall").html(`Shuttle`);
        unit = 'Shuttle';
        $("#sprinter-capacity").css("display", "block");
        $("#suburban-capacity").css("display", "none");
        $("#hiace-capacity").css("display", "none");
    });

    function updatePrices(event) {
        // Inputs
        selectedUnit = unit;
        selectedService = $( "#form-service" ).val();
        var unitIndex = getPosition(selectedUnit);

        // Early checks
        $( "#send-prebook" ).attr('disabled', 'disabled');
        if (unitIndex < 0 || selectedUnit === "false" || selectedZone  === "false") return;


        if ($("#form-service").val() === "Round Trip") {
          $("#only-oneway").css("display", "none");
          $( "#arrival-info").css("display", "block");
        };

        if($("#form-service").val() === "One Way") {
          $( "#only-oneway" ).css("display", "block");
          $( "#arrival-info").css("display", "none");
        };

        // Formulas
        var price = selectedService === "One Way"?
            cars[unitIndex].prices[selectedZone - 1].oneway :
            cars[unitIndex].prices[selectedZone - 1].roundtrip;

        price = parseInt(price);

        selectedName = $("#form-name").val(),
        selectedEmail = $("#form-email").val(),
        selectedPhone = $("#form-phone").val(),
        selectedPassengerSuburban = $("#form-passengers-suburban").val(),
        selectedPassengerHiace = $("#form-passengers-hiace").val(),
        selectedPassengerSprinter = $("#form-passengers-sprinter").val(),
        selectedArrivalDate = $("#form-arrival-date").val(),
        selectedArrivalTime = $("#form-arrival-time").val(),
        selectedArrivalAirline = $("#form-arrival-airline").val(),
        selectedArrivalFlight = $("#form-arrival-flight").val(),
        selectedDepartureDate = $("#form-departure-date").val(),
        selectedDepartureTime = $("#form-departure-time").val(),
        selectedDepartureAirline = $("#form-departure-airline").val(),
        selectedDepartureFlight = $("#form-departure-flight").val(),

        // Outputs
        $("#resume-hotel").html(`${selectedHotel}`);
        $("#resume-hotel-img").attr("src", `/${hotelicon}`);
        $("#resume-vehicle").html(`${selectedUnit}`);
        $("#resume-service").html(`${selectedService}`);
        $("#resume-name").html(`${selectedName}`);
        $("#resume-email").html(`${selectedEmail}`);
        $("#resume-phone").html(`${selectedPhone}`);
        $("#resume-passenger-suburban").html(`${selectedPassengerSuburban}`);
        $("#resume-passenger-hiace").html(`${selectedPassengerHiace}`);
        $("#resume-passenger-sprinter").html(`${selectedPassengerSprinter}`);
        $("#resume-arrival-date").html(`${selectedArrivalDate}`);
        $("#resume-arrival-time").html(`${selectedArrivalTime}`);
        $("#resume-arrival-airline-img").attr("src", `${selectedAirlineArrival}`);
        $("#resume-arrival-airline").html(`${selectedArrivalAirline}`);
        $("#resume-arrival-flight").html(`${selectedArrivalFlight}`);
        $("#resume-departure-date").html(`${selectedDepartureDate}`);
        $("#resume-departure-time").html(`${selectedDepartureTime}`);
        $("#resume-departure-airline-img").attr("src", `${selectedAirlineDeparture}`);
        $("#resume-departure-airline").html(`${selectedDepartureAirline}`);
        $("#resume-departure-flight").html(`${selectedDepartureFlight}`);

        $("#price").html(`$ ${price} USD`);
        $("#priceBig2").text(`$ ${price} USD`);

        var tax = Math.round(price * 0.05);

        $("#tax").html( `$ ${tax} USD` );

        priceTotal = Math.round(tax + price);
        pricepaypal = priceTotal;

        $("#priceTotal").html( `$ ${priceTotal} USD` );
        $("#paypal-button-container").val( priceTotal );
        $("#send-prebook").removeAttr('disabled');
    }

    $(document).on('keyup', '.valEmail input', function (event) {
        event.preventDefault();
        var respEmail;
        var email = $(this).val();
        email = email.replace(/ /g, '');
        $(this).val(email.toLowerCase());
        // vm.shaEmail(email);
        respEmail = valEmail(email);
        if (respEmail == 1) {
            $('.valEmail input').removeClass('is-danger');
            $('.valEmail span').css('display', 'none');
            $('p.errormail').css('display', 'none');
            $('p.successmail').css('display', 'block');
            if($('.valEmail').find('p.successmail').length == 0){
                $('.valEmail').append('<p class="help successmail" style="color: green; font-size: 12px;">Valid Email.</p>');
                // $('.valEmail').append('<p class="help successmail" style="color: green; font-size: 12px;">Email válido.</p>');
            }
        }else{
            $('.valEmail input').addClass('is-danger');
            $('.valEmail span').css('display', 'block');
            $('p.successmail').css('display', 'none');
            $('p.errormail').css('display', 'block');
            if($('.valEmail').find('p.errormail').length == 0){
                // $('.valEmail').append('<p class="help errormail is-danger" style="color:red;">Email invalido.</p>');
                $('.valEmail').append('<p class="help errormail is-danger" style="color:red;">Invalid Email.</p>');
            }
        }
    });

    $(document).on('keyup', '.valTel input',
        function (event) {
            var respTel;
            event.preventDefault();
            console.log('- event keyup valTel');
            var tel = $(this).val();
            tel = tel.replace(/ /g, '');
            tel = tel.replace(/\D/g, '');
            respTel = valTel(tel);
            if (respTel == 1) {
                $('p.error').css('display', 'none');
                $('p.success').css('display', 'block');
                if($('.valTel').find('p.success').length == 0){
                    $('p.error').css('display', 'none');
                    // $('.valTel').append('<p class="help success" style="color: green; font-size: 12px;">Número válido.</p>');
                    $('.valTel').append('<p class="help success" style="color: green; font-size: 12px;">Valid Number</p>');
                }
            } else {
                $('p.success').css('display', 'none');
                $('p.error').css('display', 'block');
                if($('.valTel').find('p.error').length == 0){
                    // $('.valTel').append('<p class="help error is-danger" style="color:red;">Debe proporcionar un Número con 10 dígitos.</p>');
                    $('.valTel').append('<p class="help error is-danger" style="color:red;">You must provide a 10 digit Number.</p>');
                }
            }
            $(this).val(tel);
        }
    );

    $.getJSON(routeTransfersJson, function( data ) {
        for (units in data.units){
            $("#form-unit").append("<option value='" + data.units[units].name + "'>" + data.units[units].name + "</option>");
        }
        cars = data.units

        for (airlines in data.airlines){
            $("#form-arrival-airline").append("<option value='" + data.airlines[airlines].name + "'>" + data.airlines[airlines].name + "</option>");
            $("#form-departure-airline").append("<option value='" + data.airlines[airlines].name + "'>" + data.airlines[airlines].name + "</option>");
        }
        planes = data.airlines

        for (ocations in data.ocation){
            $("#form-ocation").append("<option value='" + data.ocation[ocations].name + "'>" + data.ocation[ocations].name + "</option>");
        }
        planes = data.ocation
    });

    $("#send-prebook").on("click", function() {
        $("#step1").css("display", "none");
        $("#step2").css("display", "block");
        $("#arrival").show();

        if($('#form-service').val() === "One Way") {
            $("#departure").hide();
        };
    });

    $('.modalAlert').on('click', function(){
        $('#modalAlert').css('display', 'none');
    });

    function validateReservation(formData,displayed) {
        var nombre;
        var error = 0;
        var msgError = '';
        var email = $('input[name="email"]').val();
        email=email.replace(/ /g,'');
        var nombre=$('input[name="name"]').val();
        nombre=nombre.replace(/ /g,'');
        var telefono=$('input[name="phone"]').val();
        var resEmail = valEmail(email);
        if (resEmail != 1) {
            if(email.length == 0){
                msgError += "- You must provide <b>Email</b><br>";
            }else{
                msgError += "- You must provide <b>valid Email.</b><br>";
            }
            error++;
        }
        if (nombre == '' || nombre.length <= 2) {
            if(nombre.length == 0) {
                msgError += '- You must provide <b>Name</b><br>';
            }else{
                msgError += '- You must provide valid <b>Name</b>. (more than a 2 characters)<br>';
            }
            error++;
        }
        var respTel = valTel(telefono);
        if (respTel != 1) {
            msgError += '- You must provide <b>a 10 digits phone.</b><br>';
            error++;
        }


        console.log('error: '+error);
        if(error>0){

            $('#modalAlertBody').html(msgError);
            $('#modalAlert').css('display', 'block');
            $('#modalAlert').modal('show');


        }else{
            storeReservation(formData);
            $("#step2").css("display", "none");
            $("#step3").css("display", "block");
        }
    };
    function storeReservation(formData){
        $.ajax({
            type: 'POST',
            url: postReservationUrl,
            dataType: "json",
            data: formData,

            success: function(response) {
                $("#step2").css("display", "none");
                $("#step3").css("display", "block");
            },
            error: function(xhr, status, error){
                console.log(xhr);
            }
        });
    };
    $("#send-mail").on("click", function() {
        var formData = {
            "homepage": "https://turiscabos.netlify.app",
            "selectedAirlineArrival": selectedAirlineArrival,
            "selectedAirlineDeparture": selectedAirlineDeparture,
            "hotel": selectedHotel,
            "hotelicon": hotelicon,
            "iconArrivalAirline": selectedAirlineArrival,
            "iconDepartureAirline": selectedAirlineDeparture,
            "unit": unit,
            "service": $("#form-service").val(),
            "name": $("#form-name").val(),
            "email": $("#form-email").val(),
            "phone": $("#form-phone").val(),
            "passengerssuburban": $("#form-passengers-suburban").val(),
            "passengershiace": $("#form-passengers-hiace").val(),
            "passengerssprinter": $("#form-passengers-sprinter").val(),
            "arrivaldate": $("#form-arrival-date").val(),
            "arrivaltime": $("#form-arrival-time").val(),
            "arrivalairline": $("#form-arrival-airline").val(),
            "arrivalflight": $("#form-arrival-flight").val(),
            "departuredate": $("#form-departure-date").val(),
            "departuretime": $("#form-departure-time").val(),
            "departureairline": $("#form-departure-airline").val(),
            "departureflight": $("#form-departure-flight").val(),
            "comments": $("#form-comment").val(),
            "destination": $("#form-destination").val(),
            "pricenormal": $("#priceBig2").text(),
            "pricepaypal": pricepaypal,
            "origin": $("#form-origin").val(),
            "babysit": document.getElementById('form-babysit').checked,
            "shoppingstop": document.getElementById('form-shoppingstop').checked,
            "_token":_token
        };
        console.log(formData);
        validateReservation(formData);

    });

    // Binds
    $("#form-unit, #form-hotel, #form-service, #form-arrival-airline, #form-departure-airline").on("change", updatePrices);
    $('#reserve-modal').on('hidden.bs.modal', function () {
        location.reload();
    });

    var options = {
        url: routeTransfersJson,
        getValue: 'name',
        listLocation: "hotel",
        template: {
            type: "text",
            fields: {
                link: "name"
            }
        },

        list: {
            match: {
                enabled: true
            },
            onSelectItemEvent: function(elem) {
                selectedZone = $("#form-hotel").getSelectedItemData().zone;
                selectedHotel = $("#form-hotel").getSelectedItemData().name;
                hotelicon = $("#form-hotel").getSelectedItemData().logo;
            }
        },

        theme: "round"
    };
    $("#form-hotel").easyAutocomplete(options);
});
