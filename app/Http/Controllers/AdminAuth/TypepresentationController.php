<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Typepresentation;
use Illuminate\Http\Request;

class TypepresentationController extends Controller
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
            $typepresentation = Typepresentation::where('pl_presentation', 'LIKE', "%$keyword%")
                ->orWhere('detall', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $typepresentation = Typepresentation::latest()->paginate($perPage);
        }

        return view('admin.typepresentation.index', compact('typepresentation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.typepresentation.create');
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
			'pl_presentation' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();
        
        Typepresentation::create($requestData);

        return redirect('admin/typepresentation')->with('flash_message', 'Typepresentation added!');
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
        $typepresentation = Typepresentation::findOrFail($id);

        return view('admin.typepresentation.show', compact('typepresentation'));
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
        $typepresentation = Typepresentation::findOrFail($id);

        return view('admin.typepresentation.edit', compact('typepresentation'));
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
			'pl_presentation' => 'required|max:191',
			'detall' => 'required'
		]);
        $requestData = $request->all();
        
        $typepresentation = Typepresentation::findOrFail($id);
        $typepresentation->update($requestData);

        return redirect('admin/typepresentation')->with('flash_message', 'Typepresentation updated!');
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
        Typepresentation::destroy($id);

        return redirect('admin/typepresentation')->with('flash_message', 'Typepresentation deleted!');
    }
}
