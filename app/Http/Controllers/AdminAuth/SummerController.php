<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Summer;
use Illuminate\Http\Request;

class SummerController extends Controller
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
            $summer = Summer::where('sm_time', 'LIKE', "%$keyword%")
                ->orWhere('sm_price', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('group_id', 'LIKE', "%$keyword%")
                ->orWhere('typepresentation_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $summer = Summer::latest()->paginate($perPage);
        }

        return view('admin.summer.index', compact('summer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.summer.create');
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
        
        Summer::create($requestData);

        return redirect('admin/summer')->with('flash_message', 'Summer added!');
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
        $summer = Summer::findOrFail($id);

        return view('admin.summer.show', compact('summer'));
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
        $summer = Summer::findOrFail($id);

        return view('admin.summer.edit', compact('summer'));
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
        
        $summer = Summer::findOrFail($id);
        $summer->update($requestData);

        return redirect('admin/summer')->with('flash_message', 'Summer updated!');
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
        Summer::destroy($id);

        return redirect('admin/summer')->with('flash_message', 'Summer deleted!');
    }
}
