<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public index()
    {
    	return view('test/index');
    }

    public function create()
    {
    	return view('test.index');
    }
}
