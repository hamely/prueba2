<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Categoria;
use App\User;
use App\Role;
use App\EntraImagen;
use Illuminate\Support\Facades\Auth;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $categoria=Categoria::all();
        //$usuario=User::find(auth()->user()->id);$usuario->usuarios()->paginate(5)//para poder paginar
        $Entradas = DB::table('categorias')
            ->select('categorias.id as id_categoria','categorias.nombre','categorias.descripcion','categoria_users.*','users.name')
            ->join('categoria_users', 'categorias.id', '=', 'categoria_users.categoria_id')
            ->join('users', 'categoria_users.user_id', '=', 'users.id')->orderBy('categoria_users.id', 'DESC')->paginate(6);
        //dd($usuario->usuarios());
            
        return view('entrada.index',['entradas' => $Entradas,'categoria' => $categoria ]);
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
            $categoria->user()->attach(auth()->user()->id,array('titulo' => $titulo,'ruta' =>  $ruta,'contenido' =>$contenido));
        }

        $idMaxEntrada=DB::table('categoria_users')->max('id');

        $file= $request->imagen;
        foreach ($file as $imagenEntrada) {
            
            $EntradaImg=new EntraImagen();
            $EntradaImg->nombre='nuevo';
            $EntradaImg->descripcion=$titulo;
            $EntradaImg->estado='0';
            $EntradaImg->categoria_users_id=$idMaxEntrada;
            $EntradaImg->save();

            $idImagenEntrada=DB::table('entra_imagenes')->max('id');

            $EntraImagen = EntraImagen::find($idImagenEntrada);
 
            $extesion=$EntraImagen->id.'.'.$imagenEntrada->getClientOriginalExtension();
            EntraImagen::find($EntraImagen->id)->update(['nombre' => $extesion]);

            $destino=public_path().'/img/entrada/';
            $subir =$imagenEntrada->move($destino,$extesion); 
 
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
