<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;
use App\Group;
use Request;


class GroupController extends Controller
{


    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function index()
    {
        $groups = Auth::user()->groups()->latest()->get();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        return view('groups.create');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function store()
    {
        $group = new Group(Request::all());
        Auth::user()->groups()->save($group);
        return redirect('groups');
    }

    public function edit($id)
    {
        $group = Group::findOrFail($id);
        return view('groups.edit', compact('group'));
    }

    public function update($id)
    {
        $group = Group::findOrFail($id);
        $group->update(Request::all());

        return redirect('groups');
    }

    public function destroy($id)
    {
        $group = Group::findOrFail($id);
        $group->delete();
        return redirect('groups');
    }

}
