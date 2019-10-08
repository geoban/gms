<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teachers;
class TeachersController extends Controller
{
       public function main()
    {
    	$teachers = Teachers::all();
   		return view('teachers.main')->with('teachers', $teachers);
    }

    public function add()
    {
    	return view('teachers.add');
    }	

    public function store()
    {
    	$teacher = new Teachers;
    	$teacher->name = request()->name;
    	$teacher->advisory_section = request()->advisory_section;
    	$teacher->save();

    	return redirect('/teachers');
    }
}
