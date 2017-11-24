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
  {!!Form::open(['action'=>'pizzacontroller@create', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'accept-charset'=>'UTF-8'])!!}
                         {{csrf_field()}}
                         <div class="contact-info">
                                 <div class="form-group @if($errors->has('nombremer')) has-error @endif">
                                     <input type="text" name="nombremer" class="form-control br-radius-zero" id="nombremer"  placeholder="Nombre" value="{{ old('nombremer') }}"/>
                                     @if($errors->has('nombremer'))
                                      @foreach ($errors->get('nombremer') as $error)
                                         {{ $error  }}
                                      @endforeach
                                     @endif
                                 </div>
                                 <div class="form-group @if($errors->has('imagen')) has-error @endif">
                                     <input type="text" name="imagen" class="form-control br-radius-zero" id="imagen"  placeholder="Imagen" value="{{ old('imagen') }}"/>
                                     @if($errors->has('imagen'))
                                      @foreach ($errors->get('imagen') as $error)
                                         {{ $error  }}
                                      @endforeach
                                     @endif
                                 </div>
                                 <div class="form-group @if($errors->has('preciomer')) has-error @endif">
                                     <input type="text" name="preciomer" class="form-control br-radius-zero" id="preciomer"  placeholder="Precio" value="{{ old('preciomer') }}"/>
                                     @if($errors->has('preciomer'))
                                      @foreach ($errors->get('preciomer') as $error)
                                         {{ $error  }}
                                      @endforeach
                                     @endif
                                 </div>

                                 <div class="form-group @if($errors->has('tamanoomer')) has-error @endif">
                                     <input type="text" name="tamanoomer" class="form-control br-radius-zero" id="tamanoomer"  placeholder="Tamaño" value="{{ old('tamanoomer') }}"/>
                                     @if($errors->has('tamanoomer'))
                                      @foreach ($errors->get('tamanoomer') as $error)
                                         {{ $error  }}
                                      @endforeach
                                     @endif
                                 </div>

                                 <div class="form-group @if($errors->has('fecha')) has-error @endif">
                                     <input type="text" name="fecha" class="form-control br-radius-zero" id="fecha"  placeholder="fecha" value="{{ old('fecha') }}"/>
                                     @if($errors->has('fecha'))
                                      @foreach ($errors->get('fecha') as $error)
                                         {{ $error  }}
                                      @endforeach
                                     @endif
                                 </div>




                                 <div class="form-group">
                                     <label for="sel1">Ingredientes:</label>
                                     <select class="form-control chosen" id="ingremer" name="ingremer[]" multiple>
                                     @foreach ($ingredientes as $ingre)
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
