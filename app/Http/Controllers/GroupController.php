<?php

namespace App\Http\Controllers;

use App\Group;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GroupController extends Controller
{


    /**
     * @return mixed
     */
    public function index()
    {
        return User::all();
    }

}
