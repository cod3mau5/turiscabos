@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                    @if($errors->any())
                    <div class="notification is-danger" id="notification" style="font-size:1rem;text-align:center;">
                        <button class="delete" onclick="$('#notification').css('display','none');"></button>
                        <b>{{$errors->first()}}</b>
                    </div>

                    @endif
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="mx-auto">
                            @if(auth()->user()->role == 'admin' || auth()->user()->role == 'user')
                                LISTADO DE RESERVAS
                            @else
                                CREAR RESERVA
                            @endif
                        </h1>
                        @if(auth()->user()->role == 'admin')
                            <div class="col text-right">
                                <a href="{{route('reservations.create')}}" class="btn btn-success">NUEVA RESERVA</a>
                                <button onclick="$('#modalExport').modal('show');" class="btn btn-info">EXPORTAR RESERVAS</button>
                            </div>
                            @elseif(auth()->user()->role == 'user')
                            <div class="col text-right">
                                <a href="{{route('reservations.create')}}" class="btn btn-success">NUEVA RESERVA</a>
                                <a href="{{route('export-user-excel')}}" class="btn btn-info">EXPORTAR RESERVAS</a>
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div id="app">
                            @if (auth()->user()->role === 'admin' || auth()->user()->role === 'user')
                                <h1>{{ auth()->user()->role}}</h1>
                                    <reservation-list-component
                                        route-transfers="{{route('get-transfers')}}"
                                        get-reservations="{{ route('reservations.index') }}"
                                        _token="{{csrf_token()}}"
                                        user-role="{{auth()->user()->role}}"
                                        logout-route="{{route('logout')}}">
                                    </reservation-list-component>

                            @elseif(auth()->user()->role === 'seller')
                                <create-reservation
                                    user-role="{{auth()->user()->role}}"
                                    route-transfers="{{route('get-transfers')}}"
                                    _token="{{csrf_token()}}"
                                    store-route="{{route('reservations.store')}}"
                                    logout-route="{{route('logout')}}">
                                </create-reservation>
                            @endif
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal" id="modalExport">
        <div class="modal-background"></div>
        <div class="modal-card">
            <form method="get" action="{{route('get-reservations')}}">
                <header class="modal-card-head">
                    <p class="modal-card-title">Exportar Reservas</p>
                    <button class="delete" aria-label="close" onclick="$('#modalExport').modal('hide');prevent(event);"></button>
                </header>
                <section class="modal-card-body">
                    <p class="card-header-title has-text-centered is-justify-content-center pt-0 mt-0 mb-1">
                        Exportar todas las reservas
                    </p>
                    <a href="{{route('export-excel')}}" class="button is-fullwidth is-success is-outlined mb-3">Exportar todas</a>

                    <p class="card-header-title has-text-centered is-justify-content-center pt-0 mt-0 mb-1">
                        Exportar las reservas de hoy
                    </p>
                    <a href="{{route('get-reservations-today')}}" class="button is-fullwidth is-success is-outlined mb-3">Exportar llegadas de hoy</a>
                    <a href="{{route('get-reservations-departures-today')}}" class="button is-fullwidth is-success is-outlined mb-3">Exportar salidas de hoy</a>

                    <div class="columns is-mobile mb-0">
                        <div class="column is-full">
                            <p class="card-header-title has-text-centered is-justify-content-center pt-0 pb-0 mt-0 mb-1">
                                Filtrar por rango de fechas
                            </p>
                        </div>
                    </div>

                    <div class="columns is-mobile">
                        <div class="column is-half has-text-centered">
                            <div class="control">
                                <label class="radio">
                                    <input 
                                    type="radio" 
                                    name="filter"
                                    value="arrivalDates" 
                                    onclick="$('#departureDates').css('display','none');$('#arrivalDates').css('display','flex');"
                                    checked>
                                    Por fechas de llegada
                                </label>
                            </div>
                        </div>
                        <div class="column is-half has-text-centered">
                            <div class="control">
                                <label class="radio">
                                    <input 
                                    type="radio" 
                                    name="filter"
                                    value="departureDates"
                                    onclick="$('#departureDates').css('display','flex');$('#arrivalDates').css('display','none');">
                                    Por fechas de salida
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="columns is-mobile mb-0 has-text-centered" id="arrivalDates" style="display:flex">
                        <div class="column is-half">
                            <!-- START DATE -->
                            <label for="start">Fecha inicial (arrival):</label>
                            <input type="date" id="start" name="startDate"
                                value="{{Carbon\Carbon::now('America/Mazatlan')->format('Y-m-d')}}">
                        </div>
                        <div class="column is-half">
                            <!-- END DATE DATE -->
                            <label for="start">Fecha final (arrival):</label>
                            <input type="date" id="start" name="endDate"
                                value="{{Carbon\Carbon::now('America/Mazatlan')->format('Y-m-d')}}">
                        </div>
                    </div>

                    <div class="columns is-mobile mb-0 has-text-centered" id="departureDates" style="display:none">
                        <div class="column is-half">
                            <!-- START DATE -->
                            <label for="start">Fecha inicial (departure):</label>
                            <input type="date" id="start" name="startDepartureDate"
                                value="{{Carbon\Carbon::now('America/Mazatlan')->format('Y-m-d')}}">
                        </div>
                        <div class="column is-half">
                            <!-- END DATE DATE -->
                            <label for="start">Fecha final (departure):</label>
                            <input type="date" id="start" name="endDepartureDate"
                                value="{{Carbon\Carbon::now('America/Mazatlan')->format('Y-m-d')}}">
                        </div>
                    </div>

                </section>
                <footer class="modal-card-foot is-justify-content-end">
                    <button class="button is-danger" onclick="$('#modalExport').modal('hide');">Cancelar</button>
                    <button class="button is-success">Exportar por fecha</button>
                </footer>
            </form>
        </div>
      </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function prevent(e) {
            e.preventDefault();
        }
    </script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') .'?'.rand(5, 15) }}" defer></script>

@endsection
