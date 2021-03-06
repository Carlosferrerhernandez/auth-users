<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Softon\SweetAlert\Facades\SWAL; 
use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();

        return view('users.index')->with(['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        *   Validacion del objeto request
        */

        /*dd($request);*/

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'rol_id' => ['required'],
        ]);

        /*
        *   Registro de un usuario en la base de datos.
        */
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $user->roles()->attach($request->rol_id);

        SWAL::message('Registro exitoso!','','success',['timer'=>5000]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($usuario)
    {   
        $usuario = User::findOrFail($usuario);

        return view('users.show')->with(['usuario'=>$usuario]);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function showprofile()
    {   
        $user = Auth::user()->id;

        $usuario = User::findOrFail($user);

        return view('users.profile')->with(['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($usuario)
    {   
        /*
        * Obtener el usuario
        */

        $usuario = User::findOrFail($usuario);

        return view('users.edit')->with(['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $usuario)
    {
        /*
        *   Validacion del objeto request
        */

        /*dd($request);*/

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => [],
            'rol_id' => ['required'],
        ]);

        /*
        *   Actualizacion de un usuario en la base de datos.
        */
        $user = User::findOrFail($usuario);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        $user->roles()->sync($request->rol_id);

        SWAL::message('Actualización exitosa!','','success',['timer'=>5000]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuario)
    {
        User::destroy($usuario);

        SWAL::message('Eliminado correctamente!','','success',['timer'=>5000]);

        return redirect('usuarios');
    }
}
