@extends('layouts.app')

@section('styles')
    @if(auth()->user()->role == 'seller')
        <link rel="stylesheet" href="{{asset('css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen"/>
    @endif
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="mx-auto">@if(auth()->user()->role == 'admin') LISTADO DE RESERVAS @else CREAR RESERVA @endif</h1>
                        @if(auth()->user()->role == 'admin')
                            <div class="col text-right">
                                <a href="{{route('reservations.create')}}" class="btn btn-success">NUEVA RESERVA</a>
                                <a href="{{route('export-excel')}}" class="btn btn-info">EXPORTAR RESERVAS</a>
                            </div>

                        @endif
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(auth()->user()->role == 'admin')
                            <div id="app">
                                <reservation-list-component
                                get-reservations="{{ route('reservations.index') }}"
                                >
                                </reservation-list-component>
                            </div>
                        @else
                        <div id="app">
                            <section id="units">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <h2>Selecciona una unidad</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4 text-center">
                                            <div id="reserve-suburban" data-toggle="modal" data-target="#reserve-modal">
                                            <div class="unit-image"><img src="{{asset('images/units/suburban.png')}}"/></div>
                                            <div class="unit-txt">
                                                <p>Chevrolet Suburban</p>
                                                <p class="subtitle">6 Passengers</p>

                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <div id="reserve-hiace" data-toggle="modal" data-target="#reserve-modal">
                                            <div class="unit-image"><img src="{{asset('images/units/hiace.png')}}"/></div>
                                            <div class="unit-txt">
                                                <p>Toyota Hiace</p>
                                                <p class="subtitle">10 Passengers</p>

                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-center">
                                            <div id="reserve-sprinter" data-toggle="modal" data-target="#reserve-modal">
                                            <div class="unit-image"><img src="{{asset('images/units/sprinter.png')}}"/></div>
                                            <div class="unit-txt">
                                                <p>Mercedes-Benz Sprinter</p>
                                                <p class="subtitle">17 Passengers</p>

                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="reserve-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header d-block">
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <h4 class="modal-title" id="modalLabelSmall"></h4>
                                                    <p id="price"> </p>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                    <div class="col-sm-8 text-left">
                                                        <div id="step1">
                                                            <form>
                                                                <div class="row">
                                                                <div class="col-xs-12">
                                                                    <label>Hotel</label>
                                                                    <input id="form-hotel" name="Hotel" placeholder="Select your hotel"/>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-xs-12">
                                                                    <label>Service</label>
                                                                    <select id="form-service" name="Service">
                                                                    <option date="One Way" value="One Way">One Way</option>
                                                                    <option data="Round Trip" value="Round Trip">Round Trip</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-xs-12" id="only-oneway">
                                                                    <label>Departure</label>
                                                                    <select id="form-destination" name="Destination">
                                                                    <option data="Airport - Hotel" value="Airport - Hotel">From Airport to Hotel</option>
                                                                    <option data="Hotel - Airport" value="Hotel - Airport">From Hotel to Airport</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-xs-12">
                                                                    <input class="submit-button" id="send-prebook" type="button" name="SEND" value="SEND" disabled="disabled"/>
                                                                </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div id="step2">
                                                            <form>
                                                                <div class="row">
                                                                <div class="col-xs-6">
                                                                    <label>Full Name</label>
                                                                    <input id="form-name" type="text" name="name" placeholder="Full Name"/>
                                                                </div>
                                                                <div class="col-xs-6">
                                                                    <label>Email</label>
                                                                    <input id="form-email" type="text" name="email" placeholder="Email"/>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-xs-6">
                                                                    <label>Phone</label>
                                                                    <input id="form-phone" type="phone" name="phone" placeholder="Phone"/>
                                                                </div>
                                                                <div class="col-xs-6" id="suburban-capacity">
                                                                    <label>Pax</label>
                                                                    <select id="form-passengers-suburban">
                                                                    <option name="passengers" value="1">1 Passenger</option>
                                                                    <option name="passengers" value="2">2 Passengers</option>
                                                                    <option name="passengers" value="3">3 Passengers</option>
                                                                    <option name="passengers" value="4">4 Passengers</option>
                                                                    <option name="passengers" value="5">5 Passengers</option>
                                                                    <option name="passengers" value="6">6 Passengers</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-6" id="hiace-capacity">
                                                                    <label>Pax</label>
                                                                    <select id="form-passengers-hiace">
                                                                    <option name="passengers" value="1">1 Passenger</option>
                                                                    <option name="passengers" value="2">2 Passengers</option>
                                                                    <option name="passengers" value="3">3 Passengers</option>
                                                                    <option name="passengers" value="4">4 Passengers</option>
                                                                    <option name="passengers" value="5">5 Passengers</option>
                                                                    <option name="passengers" value="6">6 Passengers</option>
                                                                    <option name="passengers" value="7">7 Passengers</option>
                                                                    <option name="passengers" value="8">8 Passengers</option>
                                                                    <option name="passengers" value="9">9 Passengers</option>
                                                                    <option name="passengers" value="10">10 Passengers</option>
                                                                    </select>
                                                                </div>
                                                                <div class="col-xs-6" id="sprinter-capacity">
                                                                    <label>Pax</label>
                                                                    <select id="form-passengers-sprinter">
                                                                    <option name="passengers" value="1">1 Passenger</option>
                                                                    <option name="passengers" value="2">2 Passengers</option>
                                                                    <option name="passengers" value="3">3 Passengers</option>
                                                                    <option name="passengers" value="4">4 Passengers</option>
                                                                    <option name="passengers" value="5">5 Passengers</option>
                                                                    <option name="passengers" value="6">6 Passengers</option>
                                                                    <option name="passengers" value="7">7 Passengers</option>
                                                                    <option name="passengers" value="8">8 Passengers</option>
                                                                    <option name="passengers" value="9">9 Passengers</option>
                                                                    <option name="passengers" value="10">10 Passengers</option>
                                                                    <option name="passengers" value="11">11 Passengers</option>
                                                                    <option name="passengers" value="12">12 Passengers</option>
                                                                    <option name="passengers" value="13">13 Passengers</option>
                                                                    <option name="passengers" value="14">14 Passengers</option>
                                                                    <option name="passengers" value="15">15 Passengers</option>
                                                                    <option name="passengers" value="16">16 Passengers</option>
                                                                    <option name="passengers" value="17">17 Passengers</option>
                                                                    </select>
                                                                </div>
                                                                </div>
                                                                <div class="row-group" id="arrival">
                                                                <div class="row" id="arrival-info">
                                                                    <div class="col-xs-12 text-center">
                                                                    <h3>Arrival Information</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                    <label>Date</label>
                                                                    <input id="form-arrival-date" type="date" name="arrivaldate"/>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                    <label>Time</label>
                                                                    <input id="form-arrival-time" type="time" name="arrivaltime"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                    <label>Airline</label>
                                                                    <input id="form-arrival-airline"/>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                    <label>Flight #</label>
                                                                    <input id="form-arrival-flight" type="text" name="arrivalflight" placeholder="Flight"/>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="row-group" id="departure">
                                                                <div class="row roundtrip">
                                                                    <div class="col-xs-12 text-center">
                                                                    <h3 id="departure-info">Departure Information</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="row roundtrip">
                                                                    <div class="col-xs-6">
                                                                    <label>Date</label>
                                                                    <input id="form-departure-date" type="date" name="departuredate"/>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                    <label>Time</label>
                                                                    <input id="form-departure-time" type="time" name="departuretime"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row roundtrip">
                                                                    <div class="col-xs-6">
                                                                    <label>Airline</label>
                                                                    <input id="form-departure-airline"/>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                    <label>Flight #</label>
                                                                    <input id="form-departure-flight" type="text" name="departureflight" placeholder="Flight"/>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-xs-12">
                                                                    <label>Ocation</label>
                                                                    <select id="form-ocation"></select>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-xs-12">
                                                                    <label>Comments</label>
                                                                    <textarea id="form-comment" name="comments" placeholder="Comments"></textarea>
                                                                </div>
                                                                </div>
                                                                <div class="row">
                                                                <div class="col-xs-12">
                                                                    <input class="submit-button" id="send-mail" type="button" name="SEND" value="SEND"/>
                                                                </div>
                                                                </div>
                                                                <input type="hidden" name="origin" id="form-origin" value="panel_{{auth()->user()->name}}">
                                                            </form>
                                                        </div>
                                                        <div id="step3">
                                                            <div class="row no-margin">
                                                                <div class="col-xs-12">
                                                                <h2 class="text-center">Thanks for choosing us!</h2>
                                                                <h3 class="text-center">You can pay in cash when you arrive onboard our unit.</h3>
                                                                </div>
                                                                <div class="col-xs-12 text-center">
                                                                <p>Pay cash </p>
                                                                <p id="priceBig2"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="row">
                                                        <div class="col-sm-12"><img id="carimage" src="{{asset('images/units/suburban.png')}}" width="100%"/></div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        @endif
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <!-- Scripts -->
    @if(auth()->user()->role == 'admin')
        <script src="{{ asset('js/app.js') }}" defer></script>
        @else
        <script src="{{asset('js/scripts/vendors.js')}}"></script>
        <script>
            var postReservationUrl= "{{route('reservations.store')}}";
            var _token="{{ csrf_token() }}";
        </script>
        <script src="{{asset('js/scripts/main.js')}}"></script>
    @endif
@endsection
