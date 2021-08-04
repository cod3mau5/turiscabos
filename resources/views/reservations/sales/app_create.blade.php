@extends('layouts.app')

@section('styles')

        <link rel="stylesheet" href="{{asset('css/vendors.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/main.css') .'?'.rand(5, 15) }}" media="screen"/>

@endsection

@section('content')
@if(auth()->user()->role == 'admin')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="mx-auto"> CREAR RESERVA </h1>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
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
                                                        @include('components.steps')
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@else
<h1 class="text-center">NO ERES UN ADMINISTRADOR</h1>
@endif

@endsection
@section('scripts')
    <!-- Scripts -->
        <script src="{{asset('js/scripts/vendors.js')}}"></script>
        <script>
            var postReservationUrl= "{{route('reservations.store')}}";
            var _token="{{ csrf_token() }}";
        </script>
        <script src="{{asset('js/scripts/main.js')}}"></script>

@endsection
