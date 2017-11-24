<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MYN's Pizza</title>

    <!-- Styles -->





    {!!Html::style('vendor/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style('vendor/font-awesome/css/font-awesome.min.css')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Montserrat:400,700')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic')!!}
    {!!Html::style('css/freelancer.min.css')!!}
</head>
<body id="page-top">

      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">MYN's Pizza</a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          @guest
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a></li>

          @else
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Registrar</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/pizzacrear">Ingresar Pizza</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/createing">Ingresar Ingrediente</a></li>

        <li class="dropdown nav-item">
                               <a class="nav-link js-scroll-trigger" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <ul class="dropdown-menu nav-item">
                                   <li class="nav-item">
                                       <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                           Logout
                                       </a>

                                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                           {{ csrf_field() }}
                                       </form>
                                   </li>
                               </ul>
                           </li>

        </ul>
         @endguest
      </div>
    </div>
  </nav>


        @yield('content')


    <!-- Scripts -->



    {!!Html::script('vendor/jquery/jquery.min.js')!!}
    {!!Html::script('vendor/bootstrap/js/bootstrap.bundle.min.js')!!}
    {!!Html::script('vendor/jquery-easing/jquery.easing.min.js')!!}
    {!!Html::script('js/jqBootstrapValidation.js')!!}
    {!!Html::script('js/contact_me.js')!!}
    {!!Html::script('js/freelancer.min.js')!!}
    <!-- Footer -->
  <footer class="text-center">
    <div class="footer-above">
      <div class="container">
        <div class="row">
          <div class="footer-col col-md-4">
            <h3>Location</h3>
            <p>3481 Melrose Place
              <br>Beverly Hills, CA 90210</p>
          </div>
          <div class="footer-col col-md-4">
            <h3>Around the Web</h3>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-social btn-outline" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer-col col-md-4">
            <h3>About Freelancer</h3>
            <p>Freelance is a free to use, open source Bootstrap theme created by
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-below">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            Copyright &copy; Your Website 2017
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="scroll-top d-lg-none">
    <a class="btn btn-primary js-scroll-trigger" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
</body>
</html>
