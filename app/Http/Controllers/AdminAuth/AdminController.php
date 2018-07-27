<?php

namespace App\Http\Controllers\AdminAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Estate;
use App\Country;

class AdminController extends Controller
{
    //PROTEJO MI RUTA ADMINISTRADOR
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function profilesettings()
    {
        $mailAdmin = auth('admin')->user()->email;
        $admin = auth('admin')->user()->id;
        $administrador = Admin::findOrFail($admin);

        return view('admin.profile.profile', compact('administrador'));
    }

    public function children(Request $request)
    {
        return Estate::where('country_id', $request->parent)->pluck('estate', 'id');
    }

    public function edit_cred($id)
    {
        $administrador = Admin::findOrFail($id);
        return view('admin.profile.edit_cred', compact('administrador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit($id)
    {
        $administrador = Admin::findOrFail($id);
        $countries = Country::where('activo','1')->pluck('country', 'id');
        $estatus = Estate::where('active','1')->pluck('estate', 'id');

        return view('admin.profile.edit', compact('administrador','countries','estatus','title'));
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
        $this->validate($request, [
            'nombres' => 'nullable|min:1|max:50',
            'apellidos' => 'nullable|min:1|max:50',
            'telefono' => 'numeric|min:1|max:999999999999999',
            'celular' => 'numeric|min:1|max:999999999999999',
            'direccion' => 'max:150',
            'pais' => 'max:30',
            'ciudad' => 'max:30',
            'abrev' => 'max:20',
            'img' => 'mimes:jpeg,png|max:1500',
        ]);
        $requestData = $request->all();
        
        $files = Input::file('img');
        $user = Admin::findOrFail($id);
        if (!empty($files)) {
            $uploadPath = public_path('uploads/users/');
            $extension = $files->getClientOriginalName();
                //$fileName = rand(11111, 99999) . '.' . $extension;
            $files->move($uploadPath, $extension);
            $requestData['img'] = 'uploads/users/'.$extension;

            try {
                $item_delete = Admin::findOrFail($id);   
            $move = $item_delete['img'];
            $old = public_path('/').$move;
            
            if(!empty($move)){
                if(\File::exists($old)){
                    unlink($old);
                }
            }
            } catch (\Exception $e) {   
                alert()->warning('No se puede eliminar la imagen anterior!','No se pudo completar la petición')->persistent('Close');

            }

            
        }

        try {
            $user->update($requestData);
                alert()->success('Información Actualizada correctamente!','Petición realizada con exito')->persistent('Close');
            
        
        $admin = auth('admin')->user()->id;
        $administrador = Admin::findOrFail($admin);
        } catch (\Exception $e) {
                alert()->danger('Error!!! '.$e,'Error!!!')->persistent('Close');
        }
        
        return redirect('admin/myprofile');
    }

    //ACTUALIZA LAS CREDENCIAES DE SESSION DEL USUARIO
    public function update_cred(Request $request, $id){
        $this->validate($request, [
            'name' => '|min:1|max:20',
            'email' => 'min:6|max:45|required|email', 
            'password' => 'min:6|required', 
            'password_confirmation' => 'min:6|same:password'
        ]);
        $requestData = $request->all();
        $user = Admin::findOrFail($id);
        $user['password'] = bcrypt($request['password']);

        try {
            $user->update([
            'password'=>$user['password'],
            'email'=>$requestData['email'],
            'name'=>$requestData['name'],
        ]);
            Session::flush(); // removes all session data
            Auth::logout(); // logs out the user 
                alert()->success('Información Actualizada correctamente!','Petición realizada con exito')->persistent('Close');            
        } catch (Exception $e) {
                alert()->warning('No se puede realizar la petición!','Error!!!')->persistent('Close');                        
        }
        
        return redirect('admin/login');
    }

    public function paswordchange()
    {
        $mailAdmin = auth('admin')->user()->email;
        $admin = auth('admin')->user()->id;
        $administrador = Admin::findOrFail($admin);

        return view('admin.profile.edit_cred', compact('administrador'));
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


    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }



}
