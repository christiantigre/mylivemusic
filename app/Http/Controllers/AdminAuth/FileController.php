<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\File;
use Illuminate\Http\Request;
use App\Multimedia;

class FileController extends Controller
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
            $file = File::where('title', 'LIKE', "%$keyword%")
                ->orWhere('subtitle', 'LIKE', "%$keyword%")
                ->orWhere('path_file', 'LIKE', "%$keyword%")
                ->orWhere('link_media', 'LIKE', "%$keyword%")
                ->orWhere('detall', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('multimedia_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $file = File::latest()->paginate($perPage);
        }

        return view('admin.file.index', compact('file'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $tipos = Multimedia::where('active','1')->pluck('multimedia', 'id');

        return view('admin.file.create', compact('tipos'));

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
			'title' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        try {
            
        File::create($requestData);
        alert()->success('Se ha registrado correctamente el registro!','Petición reliazada con exito')->persistent('Close');

        } catch (Exception $e) {

        alert()->success('No se ha completado el registro!','Petición no completada')->persistent('Close');
            
        }

        return redirect('admin/file')->with('flash_message', 'File added!');
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
        $file = File::findOrFail($id);

        return view('admin.file.show', compact('file'));
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
        $file = File::findOrFail($id);
        $tipos = Multimedia::where('active','1')->pluck('multimedia', 'id');

        return view('admin.file.edit', compact('file','tipos'));
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
			'title' => 'required|max:191'
		]);
        $requestData = $request->all();

        try {
                    
        
        $file = File::findOrFail($id);
        $file->update($requestData);
        alert()->success('Se ha actualizado correctamente el registro!','Petición reliazada con exito')->persistent('Close');

        } catch (Exception $e) {

        alert()->warning('No se ha actualizado el registro!','No se pudo completar la petición')->persistent('Close');

        }

        return redirect('admin/file')->with('flash_message', 'File updated!');
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

        File::destroy($id);
        alert()->success('Se ha eliminado correctamente el registro!','Petición completada con exito')->persistent('Close');
            
        } catch (Exception $e) {

        alert()->success('No se ha eliminado el registro!','Petición no completada.')->persistent('Close');
            
        }

        return redirect('admin/file')->with('flash_message', 'File deleted!');
    }

    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
