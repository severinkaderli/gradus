<?php

namespace App\Http\Controllers;


use App\Group;
use App\Http\Requests;
use App\Subject;
use Request;
use Auth;

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
        $defaultFactor = '1';
        return view('subjects.create', compact('groupId', 'defaultFactor'));
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
        if ($subject->group->user->id != Auth::id()) {
            return redirect('groups');
        }
        $defaultFactor = $subject -> factor;
        return view('subjects.edit', compact('subject', 'defaultFactor'));
    }

    /**
     * @param $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, \Illuminate\Http\Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'factor' => 'required'
        ]);
        $subject = Subject::findOrFail($id);
        if ($subject->group->user->id != Auth::id()) {
            return redirect('groups');
        }

        $subject->update(Request::all());
        return redirect('groups');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        if ($subject->group->user->id != Auth::id()) {
            return redirect('groups');
        }

        $subject->delete();
        return redirect('groups');
    }
}
