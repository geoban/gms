@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/subjectstrand/store">
			@csrf
		  <div class="form-group">
		    <label for="subject_id">Subject ID</label>
		    <input type="text" class="form-control" name='subject_id' aria-describedby="emailHelp" placeholder="Subject ID">
		  </div>
		    <div class="form-group">
		    <label for="strand_id">Strand ID</label>
		    <input type="text" class="form-control" name='strand_id' aria-describedby="emailHelp" placeholder="Strand ID">
		  </div>
		  <div class="form-group">
		    <label for="semester">Semester</label>
		    <input type="text" class="form-control" name='semester' aria-describedby="emailHelp" placeholder="Semester">
		  </div>
		  <div class="form-group">
		    <label for="grade_level">Grade Level</label>
		    <input type="text" class="form-control" name='grade_level' aria-describedby="emailHelp" placeholder="Grade Level">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection