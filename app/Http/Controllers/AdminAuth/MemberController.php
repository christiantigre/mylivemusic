<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
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
            $member = Member::where('mb_name', 'LIKE', "%$keyword%")
                ->orWhere('mb_nickname', 'LIKE', "%$keyword%")
                ->orWhere('gr_birthdar', 'LIKE', "%$keyword%")
                ->orWhere('gr_mail', 'LIKE', "%$keyword%")
                ->orWhere('gr_phone', 'LIKE', "%$keyword%")
                ->orWhere('gr_cellphone', 'LIKE', "%$keyword%")
                ->orWhere('gr_instrument', 'LIKE', "%$keyword%")
                ->orWhere('gr_avathar', 'LIKE', "%$keyword%")
                ->orWhere('gr_phrase', 'LIKE', "%$keyword%")
                ->orWhere('gr_about', 'LIKE', "%$keyword%")
                ->orWhere('active', 'LIKE', "%$keyword%")
                ->orWhere('group_id', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $member = Member::latest()->paginate($perPage);
        }

        return view('admin.member.index', compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.member.create');
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
			'mb_name' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        Member::create($requestData);

        return redirect('admin/member')->with('flash_message', 'Member added!');
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
        $member = Member::findOrFail($id);

        return view('admin.member.show', compact('member'));
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
        $member = Member::findOrFail($id);

        return view('admin.member.edit', compact('member'));
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
			'mb_name' => 'required|max:191'
		]);
        $requestData = $request->all();
        
        $member = Member::findOrFail($id);
        $member->update($requestData);

        return redirect('admin/member')->with('flash_message', 'Member updated!');
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
        Member::destroy($id);

        return redirect('admin/member')->with('flash_message', 'Member deleted!');
    }
}
