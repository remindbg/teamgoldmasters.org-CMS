<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
class MembersController extends Controller
{

    /**
     * Enforce middleware.
     */
    public function __construct()
    {
        $this->middleware('isAdmin')->except(['frontindex', ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function frontindex() {
        $members = Members::all();
        return view('members.all',compact('members'));


    }
    public function index()
    {
        $members = Members::all();
        return view('admin.members.all',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $member = new Members();
        $member->name = $request['name'];
        $member->about = $request['about'];
        $member->race = $request['race'];
        $member->country = $request['country'];
        $member->save();
        return redirect()->to('/admin/members')->with('message', 'New Member Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $member = Members::find($id);
        return view('admin.members.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)

    {

        $member = Members::find($id);
        $member->name = $request['name'];
        $member->about = $request['about'];
        $member->race = $request['race'];
        $member->country = $request['country'];
        $member->save();
        return redirect()->to('/admin/members/')->with('message', 'Edited');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Members::destroy($id);
        return redirect()->to('/admin/members')->with('message', 'Deleted!');
    }

}
