@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/teachers/store">
			@csrf
		  <div class="form-group">
		    <label for="teachers">Teacher</label>
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Teacher">
		  </div>
		  <div class="form-group">
		    <label for="advisory_section">Advisory Section</label>
		    <input type="text" class="form-control" name='advisory_section' aria-describedby="emailHelp" placeholder="Advisory Section">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection