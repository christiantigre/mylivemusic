<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Detallpack;
use Illuminate\Http\Request;
use App\Typepack;

class DetallpackController extends Controller
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
            $detallpack = Detallpack::where('item_pack', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('typepack_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $detallpack = Detallpack::latest()->paginate($perPage);
        }

        return view('admin.detallpack.index', compact('detallpack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        $typespacks = Typepack::where('active','1')->pluck('pack_type', 'id');
        
        return view('admin.detallpack.create', compact('typespacks'));
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
			'item_pack' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        Detallpack::create($requestData);

        return redirect('admin/detallpack')->with('flash_message', 'Detallpack added!');
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
        $detallpack = Detallpack::findOrFail($id);

        return view('admin.detallpack.show', compact('detallpack'));
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
        $detallpack = Detallpack::findOrFail($id);
        $typespacks = Typepack::where('active','1')->pluck('pack_type', 'id');

        return view('admin.detallpack.edit', compact('detallpack','typespacks'));
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
			'item_pack' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        $detallpack = Detallpack::findOrFail($id);
        $detallpack->update($requestData);

        return redirect('admin/detallpack')->with('flash_message', 'Detallpack updated!');
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
        Detallpack::destroy($id);

        return redirect('admin/detallpack')->with('flash_message', 'Detallpack deleted!');
    }

    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }

    
}
