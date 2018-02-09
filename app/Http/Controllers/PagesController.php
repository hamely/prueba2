<?php


namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateMensageRequest;
use App\lugar;
use App\Ubigeo;
use Debugbar;
use Hashids;

class PagesController extends Controller
{
	/*protected $request;*/

	public function __construct(Request $request)
	{
		$this->middleware('verificarContacto',['only' => ['hola']]);
	}

	public function inicio()
	{
		  /*$valor='ch';
		  $distrito=Ubigeo::where('distrito','LIKE',"%{$valor}%")->take(1)->get(); 
		 
	      if(count($distrito)>0){
	      	foreach ($distrito as $itemp) 
		      {
		      	$id=$itemp->id;
		      }
*/
		      /*$listaLugaresTuristicos=Ubigeo::find(5);
		      dd($listaLugaresTuristicos->Lugares->toArray());
	      //}
	      
 			
		  /*foreach ($Ubigeo->Lugares as $item) {
		  	dd($item->pivot->coordenada_y);
		  }*/
		  //dd($Ubigeo->Lugares->toArray());

		   return view('inicio/inicio');
	}
	/*public function contacto($nombre='Invitado')
	{
		$lenguajes=[
    	'c++',
    	'php',
    	'asp'
	    ];
	    return view('welcome',['nombre' => $nombre, 'lenguajes' => $lenguajes]);
	}*/
	/*public function  mensaje(CreateMensageRequest $request)
	{
		/*if($request->has('nombre'))//para verificar si tiene nombre asignado
		{
			return "tiene nombre :".$request->input('nombre');
		}*/
		//validaciones

		/*return redirect()
						->route('contacto')
						->with('info' , 'se registro correcto');*/

		//$data=$request->all();

		//return response()->json(['data' => $data], 200);
	//}

	public function nosotros()
	{
		return view('inicio/nosotros');
	}

	public function visitarTemplos()
	{
		return view('inicio/visitarTemplos');
	}
    
    public function buscarLugares(Request $request)
    {

    	if($request->ajax())
    	{
           
	            $valor=$request->input('buscarLugares');
	            if(empty($valor))
	            {

					$respuesta="vacio";
			        return response()->json(['data' => $respuesta]);
		            
		    	}else
		    	{
			    	    
			    	    //$nuevo=lugar::where('nombre','LIKE',"%{$valor}%")->take(5)->get(); 
		    			  $distrito=Ubigeo::where('distrito','LIKE',$valor.'%')->take(1)->get(); 

		    			if(count($distrito)>0)
		    			{
		 
					      foreach ($distrito as $itemp) 
					      {
					      	$id=$itemp->id;
					      }

					      $listaLugaresTuristicos=Ubigeo::find($id);
				           if($listaLugaresTuristicos->count()>=1)
				           {
				           		
				           		return response()->json(['data' => $listaLugaresTuristicos->Lugares]);
				           		

				           }else
				           {

					           	$respuesta="vacio";
					            return response()->json(['data' => $respuesta]);

				           }

				        }else{
				        		$respuesta="vacio";
					            return response()->json(['data' => $respuesta]);
				        }
		    	}

	     }

    }
    public function LugaresLocalizado($nuevo)
    {
        
  		 $lugarLocalizado=Lugar::find(1);

   		return view('inicio.localizacionTemplo',['lugarLocalizado' => $lugarLocalizado]);

    }

     public function  disenioWeb()
     {

     		return view('inicio.disenoWeb');

     }
      public function  disenioLogotipos()
     {

     		return view('inicio.disenioLogotipos');

     }

     public function  trabajos()
     {

     		return view('inicio.trabajos');

     }

      public function  clientes()
     {

     		return view('inicio.clientes');

     }

      public function  blog()
     {

     		return view('inicio.blog');

     }


}
