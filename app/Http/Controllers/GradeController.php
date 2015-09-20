<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Http\Requests;
use App\Subject;
use Request;

class GradeController extends Controller
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
        $subjectId = $id;
        $grades = [];
        for ($i = 6.0; $i >= 1.0; $i -= 0.1) {
            $grades[strval($i)] = number_format($i, 1);
        }
        return view('grades.create', compact('subjectId', 'grades'));
    }

    /**
     * @param $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store($id, \Illuminate\Http\Request $request)
    {
        $this->validate($request, [
            'grade' => 'required',
            'factor' => 'required'
        ]);
        $subject = Subject::findOrFail($id);
        $grade = new Grade(Request::all());
        $subject->grades()->save($grade);
        return redirect('groups');
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $grade = Grade::findOrFail($id);
        if ($grade->subject->group->user->id != Auth::id()) {
            return redirect('groups');
        }

        $grades = [];
        for ($i = 6.0; $i >= 1.0; $i -= 0.1) {
            $grades[strval($i)] = number_format($i, 1);
        }
        return view('grades.edit', compact('grade', 'grades'));
    }

    /**
     * @param $id
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, \Illuminate\Http\Request $request)
    {
        $this->validate($request, [
            'grade' => 'required',
            'factor' => 'required'
        ]);
        $grade = Grade::findOrFail($id);
        if ($grade->subject->group->user->id != Auth::id()) {
            return redirect('groups');
        }

        $grade->update(Request::all());
        return redirect('groups');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $grade = Grade::findOrFail($id);
        if ($grade->subject->group->user->id != Auth::id()) {
            return redirect('groups');
        }

        $grade->delete();
        return redirect('groups');
    }
}
