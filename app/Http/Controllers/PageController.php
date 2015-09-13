<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function home() {
        if(Request::user()) {
            return redirect('groups');
        }

        return view('pages.login');
    }

    public function register() {
        if(Request::user()) {
            return redirect('groups');
        }

        return view('pages.register');
    }
}
