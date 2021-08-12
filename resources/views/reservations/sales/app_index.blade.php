@extends('layouts.app')

@section('styles')

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
                                <a href="{{route('export-excel')}}" class="btn btn-info">EXPORTAR RESERVAS</a>
                            </div>
                            @elseif(auth()->user()->role == 'user')
                            <div class="col text-right">
                                {{-- <a href="{{route('reservations.create')}}" class="btn btn-success">NUEVA RESERVA</a> --}}
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

@endsection
@section('scripts')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') .'?'.rand(5, 15) }}" defer></script>
@endsection
