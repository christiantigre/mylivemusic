<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
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
            $entity = Entity::where('en_name', 'LIKE', "%$keyword%")
                ->orWhere('en_phone', 'LIKE', "%$keyword%")
                ->orWhere('en_cellphone', 'LIKE', "%$keyword%")
                ->orWhere('en_mail', 'LIKE', "%$keyword%")
                ->orWhere('en_manager', 'LIKE', "%$keyword%")
                ->orWhere('en_datestart', 'LIKE', "%$keyword%")
                ->orWhere('en_logo', 'LIKE', "%$keyword%")
                ->orWhere('en_slogan', 'LIKE', "%$keyword%")
                ->orWhere('en_about', 'LIKE', "%$keyword%")
                ->orWhere('en_linkwebpage', 'LIKE', "%$keyword%")
                ->orWhere('en_socialtwiter', 'LIKE', "%$keyword%")
                ->orWhere('en_socialfacebook', 'LIKE', "%$keyword%")
                ->orWhere('en_socialInstagram', 'LIKE', "%$keyword%")
                ->orWhere('en_socialGoogleplus', 'LIKE', "%$keyword%")
                ->orWhere('en_socialLikedIn', 'LIKE', "%$keyword%")
                ->orWhere('en_socialYoutube', 'LIKE', "%$keyword%")
                ->orWhere('en_copyrigth', 'LIKE', "%$keyword%")
                ->orWhere('en_yearEdition', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('country_id', 'LIKE', "%$keyword%")
                ->orWhere('estate_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $entity = Entity::latest()->paginate($perPage);
        }

        return view('admin.entity.index', compact('entity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.entity.create');
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
			'en_name' => 'required|max:191',
			'en_phone' => 'required|max:25',
			'en_cellphone' => 'required|max:25',
			'en_manager' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        Entity::create($requestData);

        return redirect('admin/entity')->with('flash_message', 'Entity added!');
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
        $entity = Entity::findOrFail($id);

        return view('admin.entity.show', compact('entity'));
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
        $entity = Entity::findOrFail($id);

        return view('admin.entity.edit', compact('entity'));
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
			'en_name' => 'required|max:191',
			'en_phone' => 'required|max:25',
			'en_cellphone' => 'required|max:25',
			'en_manager' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        $entity = Entity::findOrFail($id);
        $entity->update($requestData);

        return redirect('admin/entity')->with('flash_message', 'Entity updated!');
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
        Entity::destroy($id);

        return redirect('admin/entity')->with('flash_message', 'Entity deleted!');
    }
}
