<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests;
use Auth;
use Request;


class GroupController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $groups = Auth::user()->groups()->get();
        return view('groups.index', compact('groups'));
    }

    public function archiveIndex()
    {
        $groups = Auth::user()->groups()->archived()->get();
        return view('groups.archive', compact('groups'));
    }

    public function create()
    {
        return view('groups.create');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function store(\Illuminate\Http\Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $group = new Group(Request::all());
        Auth::user()->groups()->save($group);
        return redirect('groups');
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);
        if ($group->user->id != Auth::id()) {
            return redirect('groups');
        }
        return view('groups.edit', compact('group'));
    }

    public function update($id, \Illuminate\Http\Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $group = Group::findOrFail($id);
        if ($group->user->id != Auth::id()) {
            return redirect('groups');
        }

        $group->update(Request::all());
        return redirect('groups');
    }

    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        if ($group->user->id != Auth::id()) {
            return redirect('groups');
        }

        $group->delete();
        return redirect('groups');
    }

}
