<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Strands;
class StrandsController extends Controller
{
    public function main()
    {
    	$strands = Strands::all();
   		return view('strands.main')->with('strands', $strands);
    }

    public function add()
    {
    	return view('strands.add');
    }	

    public function store()
    {
    	$strand = new Strands;
    	$strand->name = request()->name;
    	$strand->save();

    	return redirect('/strands');
    }
}
