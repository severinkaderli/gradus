<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use App\Subject;
use App\Group;

class SubjectController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        $groupId = $id;
        return view('subjects.create', compact('groupId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store($id)
    {
        $group = Group::findOrFail($id);
        $subject = new Subject(Request::all());
        $group->subjects()->save($subject);
        return redirect('groups');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subjects.edit', compact('subject'));
    }

    /**
     * @param $id
     */
    public function update($id)
    {
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
