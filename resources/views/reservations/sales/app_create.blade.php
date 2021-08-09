@extends('layouts.app')

@section('styles')

@endsection

@section('content')
@if(auth()->user()->role == 'admin')
    <div class="container-fluid" id="app">
        <create-reservation
            user-role="{{auth()->user()->role}}"
            route-transfers="{{route('get-transfers')}}"
            _token="{{csrf_token()}}"
            store-route="{{route('reservations.create')}}">
        </create-reservation>
    </div>
    @elseif(auth()->user()->role == 'user')
        <create-reservation
            user-role="{{auth()->user()->role}}"
            route-transfers="{{route('get-transfers')}}"
            _token="{{csrf_token()}}"
            store-route="{{route('reservations.store')}}">
        </create-reservation>
@else
<h1 class="text-center">NO ERES UN ADMINISTRADOR</h1>
@endif

@endsection
@section('scripts')
        <script src="{{ asset('js/app.js').'?'.rand(5, 15) }}" defer></script>
@endsection
