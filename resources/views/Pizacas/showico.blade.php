@extends('layouts.app')

@section('content')
<div class="container">

<hr class="botm-line">
<div class="activid">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-12">


		</div>
		<div class="col-md-3 col-sm-3 col-xs-6">
			<h4 class="card-text">{{$pizzas->nombre}} </h4>
			<p class="card-text"> Precio:{{$pizzas->precio}} </p>
			<p class="card-text"> Tamano: {{$pizzas->tamano}} </p>
			<p class="card-text"> imagen: {{$pizzas->imagen}} </p>

			 {!!link_to_action('HomeController@index', $title = 'Regresar', $parameters = [], $attributes = ['class'=>'btn btn-form'])!!}
		</div>

	</div>
	<div class="row">
	<div class="container">
	<h4 class="card-text"> Ingredientes </h4>
		@foreach($Ingredientes2 as $asis)
				<ul>
					<li>{{$asis->nombre}} </li>
				</ul>
		@endforeach
    {!! link_to_action('pizzacontroller@editar', $title = 'Editar', $parameters = $pizzas->id, $attributes = ['class'=>'btn btn-warning'])!!}
	</div>
	</div>

</div>
</div>
@endsection
