@extends('layouts.app')

@section('content')
  <header class="masthead2">

      </header>

      <section id="contact">
          <div class="container">
            <h2 class="text-center">Ingresar Pizza</h2>
        <hr class="star-primary">
        <div class="row">
          <div class="col-lg-8 mx-auto">
          {!!Form::model([],['action'=>['pizzacontroller@update',$pizza->id],'method'=>'PUT'])!!}
                         {{csrf_field()}}
                         <div class="contact-info">
                                 <div class="form-group ">
                                     <input type="text" name="nombre"  class="form-control br-radius-zero" id="nombre"  placeholder="Nombre" value="{{$pizza->nombre}}"/>

                                 </div>
                                 <div class="form-group ">
                                     <input type="text" name="imagen" class="form-control br-radius-zero" id="imagen"  placeholder="Imagen" value="{{$pizza->imagen}}"/>

                                 </div>
                                 <div class="form-group ">
                                     <input type="text" name="precio" class="form-control br-radius-zero" id="precio"  placeholder="Precio" value="{{$pizza->precio}}"/>

                                 </div>

                                 <div class="form-group ">
                                     <input type="text" name="tamano" class="form-control br-radius-zero" id="tamano"  placeholder="Tamaño" value="{{$pizza->tamano}}"/>

                                 </div>

                                 <div class="form-group ">
                                     <input type="text" name="fecha" class="form-control br-radius-zero" id="fecha"  placeholder="fecha" value="{{$prepa->fecha}}""/>

                                 </div>




                                 <div class="form-group">
                                     <label for="sel1">Ingredientes:</label>
                                     <select class="form-control chosen" id="ingremer" name="ingremer[]" multiple>
                                     @foreach ($Ingredientes2 as $ingre)
                                           <option value="{{$ingre->id}}">{{$ingre->nombre}}</option>
                                     @endforeach
                                     </select>
                               </div>

                         </div>
                         <div class="form-action">
                                 <button type="submit" class="btn btn-success btn-lg">Crear</button>
                         </div>
                       </form>
                       </div>
                       </div>
                       </div>
                     </section>
@endsection
