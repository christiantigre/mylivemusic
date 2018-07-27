<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estate;
use App\Country;
use Illuminate\Http\Request;

class EstateController extends Controller
{
    //PROTEJO MI RUTA ADMINISTRADOR
    public function __construct()
    {
        $this->middleware('admin', ['except' => 'logout']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $estate = Estate::where('estates.estate', 'LIKE', "%$keyword%")
                ->orWhere('estates.detall', 'LIKE', "%$keyword%")
                ->orWhere('estates.active', 'LIKE', "%$keyword%")
                ->orWhere('estates.country_id', 'LIKE', "%$keyword%")
                ->orWhere('countries.country', 'LIKE', "%$keyword%")
                ->join('countries', 'countries.id', '=', 'estates.country_id')
                ->get();
                //->latest()->paginate($perPage);
        } else {
            $estate = Estate::get();//latest()->paginate($perPage);
        }

        return view('admin.estate.index', compact('estate'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $countries = Country::where('activo','1')->pluck('country', 'id');
        return view('admin.estate.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'estate' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();

        try {

            Estate::create($requestData);
            alert()->success('Se registro de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo registrar')->persistent('Close');
            
        }
        

        return redirect('admin/estate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $estate = Estate::findOrFail($id);

        return view('admin.estate.show', compact('estate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $estate = Estate::findOrFail($id);
        $countries = Country::where('activo','1')->pluck('country', 'id');
        return view('admin.estate.edit', compact('estate','countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'estate' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();

        try {
            $estate = Estate::findOrFail($id);
            $estate->update($requestData);
            alert()->success('Se actualizo de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la actualización de forma correcta.','No se pudo actualizar')->persistent('Close');
        }
        

        return redirect('admin/estate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            
            Estate::destroy($id);
            alert()->success('Se Elimino de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
            
        } catch (\Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo eliminar')->persistent('Close');
        }

        return redirect('admin/estate');
    }

    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }


}
