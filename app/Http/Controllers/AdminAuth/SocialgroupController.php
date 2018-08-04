<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Socialgroup;
use Illuminate\Http\Request;

class SocialgroupController extends Controller
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
            $socialgroup = Socialgroup::where('sc_link', 'LIKE', "%$keyword%")
                ->orWhere('sc_redsocial', 'LIKE', "%$keyword%")
                ->orWhere('group_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $socialgroup = Socialgroup::latest()->paginate($perPage);
        }

        return view('admin.socialgroup.index', compact('socialgroup'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.socialgroup.create');
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
        
        Socialgroup::create($requestData);

        return redirect('admin/socialgroup')->with('flash_message', 'Socialgroup added!');
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
        $socialgroup = Socialgroup::findOrFail($id);

        return view('admin.socialgroup.show', compact('socialgroup'));
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
        $socialgroup = Socialgroup::findOrFail($id);

        return view('admin.socialgroup.edit', compact('socialgroup'));
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
        
        $socialgroup = Socialgroup::findOrFail($id);
        $socialgroup->update($requestData);

        return redirect('admin/socialgroup')->with('flash_message', 'Socialgroup updated!');
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
        Socialgroup::destroy($id);

        return redirect('admin/socialgroup')->with('flash_message', 'Socialgroup deleted!');
    }
}
