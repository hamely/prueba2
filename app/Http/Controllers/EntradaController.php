<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Categoria;
use App\User;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $usuario=User::find(auth()->user()->id);
        //dd($usuario->usuarios());
        return view('entrada.index',['entradas' => $usuario->usuarios()->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria=Categoria::all();
        return view('entrada.create',['categoria' => $categoria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruta=str_replace(" ", "-", $request->titulo);
        $contenido=$request->contenido;
        $titulo=$request->titulo;

        foreach ($request->nombre as $idCategoria) 
        {
            $categoria=Categoria::find($idCategoria);
            $categoria->user()->attach(auth()->User()->id,array('titulo' => $titulo,'ruta' =>  $ruta,'contenido' =>$contenido));
        }
        
        Session::flash('success', 'Se Agrego correctamente la entrada');


        return redirect()->route('entradas.index');

  
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
