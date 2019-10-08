<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sections;
class SectionsController extends Controller
{
    public function main()
   	{
   		$sections = Sections::all();
   		return view('sections.main')->with('sections', $sections);
   	}

   	public function add()
   	{
   		return view('sections.add');
   	}
   	public function store()
   	{
   		$section = new Sections;
    	$section->name = request()->name;
    	$section->is_active = request()->is_active;
    	$section->save();

    	return redirect('/sections');
   	}
}
