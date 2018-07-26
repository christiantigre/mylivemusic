<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Placepresentation;
use Illuminate\Http\Request;

class PlacepresentationController extends Controller
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
            $placepresentation = Placepresentation::where('place', 'LIKE', "%$keyword%")
                ->orWhere('detall', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $placepresentation = Placepresentation::latest()->paginate($perPage);
        }

        return view('admin.placepresentation.index', compact('placepresentation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.placepresentation.create');
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
			'place' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();
        

        try {

            Placepresentation::create($requestData);
            alert()->success('Se registro de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo registrar')->persistent('Close');
            
        }

        return redirect('admin/placepresentation')->with('flash_message', 'Placepresentation added!');
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
        $placepresentation = Placepresentation::findOrFail($id);

        return view('admin.placepresentation.show', compact('placepresentation'));
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
        $placepresentation = Placepresentation::findOrFail($id);

        return view('admin.placepresentation.edit', compact('placepresentation'));
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
			'place' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();
        
        

        try {

            $placepresentation = Placepresentation::findOrFail($id);
            $placepresentation->update($requestData);
            alert()->success('Se actualizó de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo actualizar')->persistent('Close');
            
        }

        return redirect('admin/placepresentation')->with('flash_message', 'Placepresentation updated!');
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
            Placepresentation::destroy($id);
            alert()->success('Se eliminó de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo eliminar')->persistent('Close');
            
        }

        return redirect('admin/placepresentation')->with('flash_message', 'Placepresentation deleted!');
    }

    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }

}
