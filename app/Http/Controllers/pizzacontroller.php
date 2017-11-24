<?php

namespace App\Http\Controllers;
use App\Pizza;
use App\Ingrediente;
use App\Preparacion;
use Session;
use Redirect;

use Illuminate\Http\Request;

class pizzacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredientes = Ingrediente::all();
        return view('pizzas.index', compact('ingredientes'));
    }


    public function index3()
    {   $ingredientes = Ingrediente::all();
        $pizzas = Pizza::all();

        return view('welcome', compact('ingredientes', 'pizzas'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

      $pizza = Pizza::create([
          'nombre'=> $request->input('nombremer'),
          'imagen' => $request->input('imagen'),
          'precio' => $request->input('preciomer'),
          'tamano' => $request->input('tamanoomer')

          ]);

          if($request->input('ingremer')){
              $asignados = $request->input('ingremer');
              foreach ($asignados as $asig => $value) {
                  $asignacion = Preparacion::create([
                      'fecha'=>$request->input('fecha'),
                      'ingrediente_id'=>$value,
                      'pizza_id'=>$pizza->id
                      ]);
              }
              }

        return redirect('/pizzacrear');
    }

    public function ingrediente()
    {
        //
    }

    public function showico(Request $request ,$id){

      $ingredientes = Ingrediente::all();

      $pizzas = Pizza::select('pizza.nombre','pizza.id','pizza.tamano','pizza.imagen','pizza.precio')->where('pizza.id',$id)->first();
      $Ingredientes2 = Preparacion::join('ingrediente','ingrediente.id','=','preparacion.ingrediente_id')->where('preparacion.pizza_id',$id)->select('ingrediente.nombre')->get();

      return view('pizzas.showico',['pizzas'=>$pizzas,'Ingredientes2'=>$Ingredientes2]);




    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {
        $pizza = Pizza::where('pizza.id',$id)->first();
        $Ingredientes2 = Preparacion::join('ingrediente','ingrediente.id','=','preparacion.ingrediente_id')->where('preparacion.pizza_id',$id)->select('ingrediente.nombre')->get();
        $prepa=Preparacion::where('pizza_id',$id)->first();
     return view('pizzas.editpizza',compact('pizza','Ingredientes2','prepa'));
    }

    public function destroy($id)
    {
      $asignacion2 = Preparacion::where('pizza_id',$id)->delete();
      $pizza = Pizza::where('pizza.id',$id)->delete();
      return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $pizza = Pizza::where('id',$id)->update([
          'nombre'=>$request->input('nombre'),
          'tamano'=>$request->input('tamano'),
          'precio'=>$request->input('precio'),
          'imagen'=>$request->input('imagen')]);

          if($request->input('rep')){
                      $asignados = $request->input('rep');
                      $asignacion2 = Preparacion::where('ingrediente_id',$id)->get();
                      $pizza = Pizza::where('id',$id)->first();
                      $asignacion2 = Preparacion::where('ingrediente_id',$id)->delete();

                      foreach ($asignados as $asig => $value) {
                          $preparacion = Preparacion::create([
                              'fecha' => $request->input('fecha'),
                              'ingrediente_id' => $value,
                              'pizza_id' => $pizza->id
                              ]);
                      }
                  }
                  return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
