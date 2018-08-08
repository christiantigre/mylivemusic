<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Multimedia;
use Illuminate\Http\Request;
use App\File;

class MultimediaController extends Controller
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
            $multimedia = Multimedia::where('multimedia', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $multimedia = Multimedia::latest()->paginate($perPage);
        }

        return view('admin.multimedia.index', compact('multimedia'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.multimedia.create');
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
			'multimedia' => 'required|max:191'
		]);
        $requestData = $request->all();

        try {

        Multimedia::create($requestData);

        alert()->success('Se ha registrado correctamente el registro!','Petición reliazada con exito')->persistent('Close');
            
        } catch (Exception $e) {

        alert()->warning('No se puede ingresar este registro!','No se pudo completar la petición')->persistent('Close');
            
        }
        

        return redirect('admin/multimedia')->with('flash_message', 'Multimedia added!');
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
        $multimedia = Multimedia::findOrFail($id);

        return view('admin.multimedia.show', compact('multimedia'));
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
        $multimedia = Multimedia::findOrFail($id);

        return view('admin.multimedia.edit', compact('multimedia'));
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
			'multimedia' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        try {
            
        $multimedia = Multimedia::findOrFail($id);
        $multimedia->update($requestData);
        
        alert()->success('Se ha actualizado correctamente el registro!','Petición reliazada con exito')->persistent('Close');

        } catch (Exception $e) {

        alert()->warning('No se puede actualizar este registro!','No se pudo completar la petición')->persistent('Close');
            
        }

        return redirect('admin/multimedia')->with('flash_message', 'Multimedia updated!');
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

        $delete = File::where('multimedia_id','=',$id)->first();
        
        if(count($delete)){
            
            alert()->info('Se esta utilizando este registro en otras relaciones','No se puede eliminar este registro!')->persistent('Close');
        }else{

            try {
                Multimedia::destroy($id);

                alert()->success('Se ha eliminado correctamente el registro!','Petición reliazada con exito')->persistent('Close');
            } catch (Exception $e) {
                alert()->warning('No se ha eliminado correctamente el registro!','Petición no completada')->persistent('Close');                
            }
            
            
        }

        return redirect('admin/multimedia')->with('flash_message', 'Multimedia deleted!');
    }

    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
