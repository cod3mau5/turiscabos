@extends('layouts.home_master')
@section('content')
<section id="our-services">
    <div class="container">
      <div class="row our-services-group">
        <div class="col-sm-10 col-sm-offset-1 text-center">
          <h2>Grupos</h2>
          <p>Estas buscando transporte para 10 personas o más, de su familia o un grupo de más de 50 personas? podemos proporcionar transporte privado para cualquier ocasión, incluyendo traslados al aereopuerto, servicios locales, convenciones, bodas. No importa la distancia o el tamaño del grupo</p>
        </div>
      </div>
      <form class="row">
        <div class="col-sm-6">
          <input class="input-md our-services-inputs" type="text" name="eventType" placeholder="Tipo de evento"/>
          <input class="input-md our-services-inputs" type="number" name="passengers" placeholder="Pasajeros"/>
          <input class="input-md our-services-inputs" type="text" name="pickupPlace" placeholder="Lugar de Recogida"/>
          <input class="input-md our-services-inputs" type="date" name="date" placeholder="Fecha" min="2020-02-05" max="2020-04-30"/>
        </div>
        <div class="col-sm-6">
          <input class="input-md our-services-inputs" type="text" name="name" placeholder="Nombre"/>
          <input class="input-md our-services-inputs" type="email" name="email" placeholder="Email"/>
          <input class="input-md our-services-inputs" type="number" name="phone" placeholder="Numero Telefonico"/>
          <input class="input-md our-services-inputs" type="text" name="comment" placeholder="Comentarios"/>
        </div>
      </form>
    </div>
</section>
@endsection
