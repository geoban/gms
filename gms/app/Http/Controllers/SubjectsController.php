<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;

class SubjectsController extends Controller
{
   	public function main()
   	{
   		$subjects = Subjects::all();
   		return view('subjects.main')->with('subjects', $subjects);
   	}

   	public function add()
   	{
   		return view('subjects.add');
   	}
   	public function store()
   	{
   		$subject = new Subjects;
    	$subject->name = request()->name;
    	$subject->save();

    	return redirect('/subjects');
   	}
}
