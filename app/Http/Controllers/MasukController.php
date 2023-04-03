<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function login()
    {
        return view('pages.sign');
    }
}
