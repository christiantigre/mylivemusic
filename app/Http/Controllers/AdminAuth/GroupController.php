<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Group;
use Illuminate\Http\Request;

use App\Country;
use App\Estate;

class GroupController extends Controller
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
            $group = Group::where('gr_name', 'LIKE', "%$keyword%")
                ->orWhere('gr_datestart', 'LIKE', "%$keyword%")
                ->orWhere('gr_detall', 'LIKE', "%$keyword%")
                ->orWhere('gr_slogan', 'LIKE', "%$keyword%")
                ->orWhere('gr_logo', 'LIKE', "%$keyword%")
                ->orWhere('gr_email', 'LIKE', "%$keyword%")
                ->orWhere('gr_about', 'LIKE', "%$keyword%")
                ->orWhere('gr_phone', 'LIKE', "%$keyword%")
                ->orWhere('gr_cellphone', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('manager_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $group = Group::latest()->paginate($perPage);
        }

        return view('admin.group.index', compact('group'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $countries = Country::where('activo','1')->pluck('country', 'id');
        $estatus = Estate::where('active','1')->pluck('estate', 'id');

        return view('admin.group.create', compact('countries','estatus'));
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
			'gr_name' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        Group::create($requestData);

        return redirect('admin/group')->with('flash_message', 'Group added!');
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
        $group = Group::findOrFail($id);

        return view('admin.group.show', compact('group'));
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
        $group = Group::findOrFail($id);

        return view('admin.group.edit', compact('group'));
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
			'gr_name' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        $group = Group::findOrFail($id);
        $group->update($requestData);

        return redirect('admin/group')->with('flash_message', 'Group updated!');
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
        Group::destroy($id);

        return redirect('admin/group')->with('flash_message', 'Group deleted!');
    }
}
