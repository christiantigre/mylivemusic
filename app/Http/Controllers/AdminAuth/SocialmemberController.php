<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Socialmember;
use Illuminate\Http\Request;

class SocialmemberController extends Controller
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
            $socialmember = Socialmember::where('sc_link', 'LIKE', "%$keyword%")
                ->orWhere('sc_redsocial', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('member_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $socialmember = Socialmember::latest()->paginate($perPage);
        }

        return view('admin.socialmember.index', compact('socialmember'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.socialmember.create');
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
			'sc_link' => 'required'
		]);
        $requestData = $request->all();
        
        Socialmember::create($requestData);

        return redirect('admin/socialmember')->with('flash_message', 'Socialmember added!');
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
        $socialmember = Socialmember::findOrFail($id);

        return view('admin.socialmember.show', compact('socialmember'));
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
        $socialmember = Socialmember::findOrFail($id);

        return view('admin.socialmember.edit', compact('socialmember'));
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
			'sc_link' => 'required'
		]);
        $requestData = $request->all();
        
        $socialmember = Socialmember::findOrFail($id);
        $socialmember->update($requestData);

        return redirect('admin/socialmember')->with('flash_message', 'Socialmember updated!');
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
        Socialmember::destroy($id);

        return redirect('admin/socialmember')->with('flash_message', 'Socialmember deleted!');
    }

    //DECLARO EL GUARD PARA QUEA ACCEDIBLE POR USUARIOS ADMIN UNICAMENTE//
    
    protected function guard()
    {
        return Auth::guard('admin');
    }
    
}
