@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <h1 class="mx-auto">RESERVAS</h1>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="app">
                        <reservation-list-component get-reservations="{{ route('reservations.index') }}"></reservation-list-component>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
