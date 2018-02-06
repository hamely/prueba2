<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\updateUserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     function __construct()
    {
         $this->middleware(['auth' ,'roles:admin,estudiante'],['except' => ['edit', 'update']]);
    }

    public function index()
    {
        $Users =User::all();
        return view('Users.index' ,["Users" => $Users]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       $roles=Role::all();
       return view('Users.create',['roles' => $roles ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         

          
            $user = new User;

            $user->name =$request->name;

            $user->email = $request->email;

            $user->password = bcrypt($request->password);

            $user->save();
            


            $userBuscar=User::find($user->id);

            $userBuscar->roles()->attach($request->role);

            Session::flash('success', 'Se Agrego correctamente');


            return redirect()->route('usuarios.index');

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
        
        $user=User::findOrFail($id);

        $roles =Role::pluck('display_name', 'id');

       // $this->authorize($user);//esta es de UsersPolicy

        return view('Users.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateUserRequest $request, $id)
    {
        //return $request->all();//saber si envia dato para actualizar
        $user =User::findOrFail($id);

        $user->update($request->all());

        $user->roles()->sync($request->roles);

        //return redirect()->route('usuarios.index');
        return back()->with('info', 'Usuario actualizado' );//envio de mensajes
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            /*$userBuscar=User::find($id);
            $userBuscar->roles()->detach($request->role);*/

            /*$userBuscar=User::findOrFail($id);
            $userBuscar->delete();
            return back();*/
            $usuario=DB::table('assigned_roles')->where('id', $id);
            count($usuario);
           
        
    }

 
    public function listarEliminarUsuarios($id)
    {
        
        $user=User::find($id);
       //dd($user->roles->toArray());
       /* $data = [];
        $data['user'] = $user->roles;*/

     // dd($user->roles->toArray());

        return view('Users.eliminar',['user' => $user->roles]);
    }

    public function eliminar($id_usuario,$id_rol)
    {
        
        $User= User::find($id_usuario);
        $User->roles()->detach($id_rol);

        return redirect()->route('usuarios.index');
    }

}
