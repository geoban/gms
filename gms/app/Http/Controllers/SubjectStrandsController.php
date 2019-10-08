<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectStrands;
class SubjectStrandsController extends Controller
{
    public function main()
   	{
   		$subjectstrands = SubjectStrands::all();
   		return view('subjectstrands.main')->with('subjectstrands', $subjectstrands);
   	}

   	public function add()
   	{
   		return view('subjectstrands.add');
   	}
   	public function store()
   	{
   		$subjectstrand = new SubjectStrands;
    	$subjectstrand->subject_id = request()->subject_id;
    	$subjectstrand->strand_id = request()->strand_id;
    	$subjectstrand->semester = request()->semester;
    	$subjectstrand->grade_level = request()->grade_level;
    	$subjectstrand->save();

    	return redirect('/subjectstrand');
   	}
}
