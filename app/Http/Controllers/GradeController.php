<?php

namespace App\Http\Controllers;

use Request;
use App\Grade;
use App\Subject;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        $subjectId = $id;
        $grades = [];
        for($i=6.0;$i>=1.0;$i-=0.1) {
            $grades[strval($i)] = number_format($i, 1);
        }
        return view('grades.create', compact('subjectId', 'grades'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store($id)
    {
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
        $grades = [];
        for($i=6.0;$i>=1.0;$i-=0.1) {
            $grades[strval($i)] = number_format($i, 1);
        }
        $grade = Grade::findOrFail($id);
        return view('grades.edit', compact('grade', 'grades'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id)
    {
        $grade = Grade::findOrFail($id);
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
        $grade->delete();

        return redirect('groups');
    }
}
