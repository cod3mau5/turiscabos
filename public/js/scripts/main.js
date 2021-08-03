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

    $( "#reserve-suburban" ).click(function() {
        $(".modal-body img#carimage").attr("src","../images/units/suburban.png");
        $("h4#modalLabelSmall").html(`Chevrolet Suburban`);
        unit = 'Chevrolet Suburban';
        $("#suburban-capacity").css("display", "block");
        $("#hiace-capacity").css("display", "none");
        $("#sprinter-capacity").css("display", "none");
    });

    $( "#reserve-hiace" ).click(function() {
        $(".modal-body img#carimage").attr("src","../images/units/hiace.png");
        $("h4#modalLabelSmall").html(`Toyota Hiace`);
        unit = 'Toyota Hiace';
        $("#hiace-capacity").css("display", "block");
        $("#suburban-capacity").css("display", "none");
        $("#sprinter-capacity").css("display", "none");
    });

    $( "#reserve-sprinter" ).click(function() {
        $(".modal-body img#carimage").attr("src","../images/units/sprinter.png");
        $("h4#modalLabelSmall").html(`Mercedes-Benz Sprinter`);
        unit = 'Mercedes-Benz Sprinter';
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

    $.getJSON( "../json/transfers.json", function( data ) {
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
            "_token":_token
        };
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
        $("#step2").css("display", "none");
        $("#step3").css("display", "block");
    });

    // Binds
    $("#form-unit, #form-hotel, #form-service, #form-arrival-airline, #form-departure-airline").on("change", updatePrices);
    $('#reserve-modal').on('hidden.bs.modal', function () {
        location.reload();
    });

    var options = {
        url: '../json/transfers.json',
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
