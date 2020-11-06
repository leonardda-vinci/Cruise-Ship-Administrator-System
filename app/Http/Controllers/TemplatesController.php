<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplatesController extends Controller
{
    //Return view for index
    public function index()
    {
    	return view('/templates.index');
    }

    //Return view for Another One
    public function anotherOne()
    {
    	return view('/templates.another_one');
    }

    //Return view for Extra One
    public function extraOne()
    {
    	return view('/templates.extra_one');
    }
}
