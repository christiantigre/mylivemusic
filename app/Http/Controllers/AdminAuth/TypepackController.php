<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Typepack;
use Illuminate\Http\Request;

class TypepackController extends Controller
{
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
            $typepack = Typepack::where('pack_type', 'LIKE', "%$keyword%")
                ->orWhere('pack_price', 'LIKE', "%$keyword%")
                ->orWhere('pack_detall', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $typepack = Typepack::latest()->paginate($perPage);
        }

        return view('admin.typepack.index', compact('typepack'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.typepack.create');
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
			'pack_type' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        Typepack::create($requestData);

        return redirect('admin/typepack')->with('flash_message', 'Typepack added!');
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
        $typepack = Typepack::findOrFail($id);

        return view('admin.typepack.show', compact('typepack'));
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
        $typepack = Typepack::findOrFail($id);

        return view('admin.typepack.edit', compact('typepack'));
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
			'pack_type' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        $typepack = Typepack::findOrFail($id);
        $typepack->update($requestData);

        return redirect('admin/typepack')->with('flash_message', 'Typepack updated!');
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
        Typepack::destroy($id);

        return redirect('admin/typepack')->with('flash_message', 'Typepack deleted!');
    }
}
