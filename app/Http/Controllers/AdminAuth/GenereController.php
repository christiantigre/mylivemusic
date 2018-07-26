<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Genere;
use Illuminate\Http\Request;

class GenereController extends Controller
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
            $genere = Genere::where('genere_music', 'LIKE', "%$keyword%")
                ->orWhere('detall', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->get();
                //->latest()->paginate($perPage);
        } else {
            $genere = Genere::get();//latest()->paginate($perPage);
        }

        return view('admin.genere.index', compact('genere'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.genere.create');
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
			'genere_music' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();
        

        try {

            Genere::create($requestData);
            alert()->success('Se registro de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo registrar')->persistent('Close');
            
        }

        return redirect('admin/genere')->with('flash_message', 'Genere added!');
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
        $genere = Genere::findOrFail($id);

        return view('admin.genere.show', compact('genere'));
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
        $genere = Genere::findOrFail($id);

        return view('admin.genere.edit', compact('genere'));
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
			'genere_music' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();
        
        

        try {

            $genere = Genere::findOrFail($id);
            $genere->update($requestData);
            alert()->success('Se actualizó de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo actualizar')->persistent('Close');
            
        }

        return redirect('admin/genere')->with('flash_message', 'Genere updated!');
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

            Genere::destroy($id);
            alert()->success('Se eliminó de forma correcta este registro.','Petición realizada con exito')->persistent('Close');
        } catch (Exception $e) {
            alert()->warning('No se pudo realizar la petición de forma correcta.','No se pudo eliminar')->persistent('Close');
            
        }

        return redirect('admin/genere')->with('flash_message', 'Genere deleted!');
    }

    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }


}
