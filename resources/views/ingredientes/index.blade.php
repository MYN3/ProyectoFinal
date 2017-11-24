@extends('layouts.app')

@section('content')
  <header class="masthead2">

      </header>
<section id="contact">
  <form action="ingredientecrear" method="POST">
                   {{csrf_field()}}
      <div class="container">
        <h2 class="text-center">Ingresar Ingredientes</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Nombre</label>
                  <input class="form-control" id="name" name="nombre" type="text" placeholder="Nombre de el Ingrediente" required data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <label>Cantidad</label>
                  <input class="form-control" name="cantidad" id="number" type="text" placeholder="Cantidad" required data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>


              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </form>
    </section>
  @endsection
