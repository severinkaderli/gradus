<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Auth;


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

}
