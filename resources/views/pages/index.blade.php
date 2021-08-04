@extends('layouts.pages_master')
@section('content')
    <section id="hero">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12 no-padding">
                <div class="carousel slide" id="banner" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li class="active" data-target="#banner" data-slide-to="0"></li>
                    <li data-target="#banner" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active"><img class="img-src-1 img-size"/></div>
                    <div class="item"><img class="img-src-2 img-size"/></div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="units">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>SELECCIONE UNA UNIDAD</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <div id="reserve-suburban" data-toggle="modal" data-target="#reserve-modal">
                    <div class="unit-image"><img src="{{asset('images/units/suburban.png')}}"/></div>
                    <div class="unit-txt">
                        <p>Chevrolet Suburban</p>
                        <p class="subtitle">6 Passengers</p>
                        <p class="book">BOOK NOW</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div id="reserve-hiace" data-toggle="modal" data-target="#reserve-modal">
                    <div class="unit-image"><img src="{{asset('images/units/hiace.png')}}"/></div>
                    <div class="unit-txt">
                        <p>Toyota Hiace</p>
                        <p class="subtitle">10 Passengers</p>
                        <p class="book">BOOK NOW</p>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <div id="reserve-sprinter" data-toggle="modal" data-target="#reserve-modal">
                    <div class="unit-image"><img src="{{asset('images/units/sprinter.png')}}"/></div>
                    <div class="unit-txt">
                        <p>Mercedes-Benz Sprinter</p>
                        <p class="subtitle">17 Passengers</p>
                        <p class="book">BOOK NOW</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="reserve-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
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
@endsection
