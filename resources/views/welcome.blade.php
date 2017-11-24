@extends('layouts.app')
@section('content')


<html>
    <body>
      <!-- Header -->|
<header class="masthead">
  <div class="container">
    <img class="img-fluid" src="img/pizza.png" width="400" height="400" alt="">
    <div class="intro-text">
      <span class="name">MYN's Pizza</span>
      <hr class="star-light">
      <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
    </div>
  </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
  <div class="container">
    <h2 class="text-center">Pizzas</h2>
    <hr class="star-primary">
    <div class="row">
  @forelse($pizzas as $acti)
      <div class="col-sm-6 portfolio-item">
                 <a class="portfolio-link" href="#portfolioModal{{$acti->id}}" data-toggle="modal">
                   <div class="caption">
                     <div class="caption-content">
                       <i class="fa fa-search-plus fa-3x"></i>
                     </div>
                   </div>
                   <img class="img-fluid" src="img/portfolio/pp.jpg" alt="">
                 </a>
      </div>


	<div class="row">

		<div class="col-sm-4 portfolio-item">
			<h4 class="card-text">{{$acti->nombre}} </h4>
			<p class="card-text">{{$acti->precio}} </p>
      <p class="card-text">{{$acti->tamano}} </p>
      @guest

@else
  {!! link_to_action('pizzacontroller@showico', $title = 'Mas información', $parameters = $acti->id, $attributes = ['class'=>'btn btn-danger'])!!}
      @endguest
		</div>
	</div><br><br>
	@empty
		<h2>No hay actividades publicadas</h2>
	@endforelse



    </div>
  </div>
</section>
@foreach($pizzas as $acti)
<div class="portfolio-modal modal fade" id="portfolioModal{{$acti->id}}" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <h2>{{$acti->nombre}}</h2>
                  <hr class="star-primary">
                  <img class="img-fluid img-centered" src="img/portfolio/pp.jpg" alt="">
                  <p>Ingredientes: </p>
                  <ul class="list-inline item-details">
                    <li>Tamaño:
                      <strong>
                        <a >{{$acti->tamano}}</a>
                      </strong>
                    </li>
                    <li>Precio:
                      <strong>
                        <a>{{$acti->precio}}</a>
                      </strong>
                    </li>
                    <li>Service:
                      <strong>
                        <a >{{$acti->imagen}}</a>
                      </strong>
                    </li>
                  </ul>
                  <button class="btn btn-success" type="button" data-dismiss="modal">
                    <i class="fa fa-times"></i>
                    Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
    </body>

</html>
@endsection
