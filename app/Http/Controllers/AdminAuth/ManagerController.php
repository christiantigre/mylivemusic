<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Manager;
use Illuminate\Http\Request;
use App\Estate;
use App\Country;

class ManagerController extends Controller
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
            $manager = Manager::where('mng_name', 'LIKE', "%$keyword%")
                ->orWhere('mng_lastname', 'LIKE', "%$keyword%")
                ->orWhere('mng_phone', 'LIKE', "%$keyword%")
                ->orWhere('mng_cellphone', 'LIKE', "%$keyword%")
                ->orWhere('mng_mail', 'LIKE', "%$keyword%")
                ->orWhere('mng_address', 'LIKE', "%$keyword%")
                ->orWhere('mng_avathar', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('country_id', 'LIKE', "%$keyword%")
                ->orWhere('estate_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $manager = Manager::latest()->paginate($perPage);
        }

        return view('admin.manager.index', compact('manager'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.manager.create');
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
			'mng_name' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        Manager::create($requestData);

        return redirect('admin/manager')->with('flash_message', 'Manager added!');
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
        $manager = Manager::findOrFail($id);

        return view('admin.manager.show', compact('manager'));
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
        $manager = Manager::findOrFail($id);
        
        $countries = Country::where('activo','1')->pluck('country', 'id');
        $estatus = Estate::where('active','1')->pluck('estate', 'id');

        return view('admin.manager.edit', compact('manager','countries','estatus'));
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
			'mng_name' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        $manager = Manager::findOrFail($id);
        $manager->update($requestData);

        return redirect('admin/manager')->with('flash_message', 'Manager updated!');
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
        Manager::destroy($id);

        return redirect('admin/manager')->with('flash_message', 'Manager deleted!');
    }
}
