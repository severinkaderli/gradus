<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Subject;
use App\Group;

class SubjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $groupId = $id;
        return view('subjects.create', compact('groupId'));
    }

    /**
     * @param $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store($id, \Illuminate\Http\Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'factor' => 'required'
        ]);
        $group = Group::findOrFail($id);
        $subject = new Subject(Request::all());
        $group->subjects()->save($subject);
        return redirect('groups');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.edit', compact('subject'));
    }

    /**
     * @param $id
     */
    public function update($id, \Illuminate\Http\Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'factor' => 'required'
        ]);
        $subject = Subject::findOrFail($id);
        $subject->update(Request::all());

        return redirect('groups');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect('groups');
    }
}
