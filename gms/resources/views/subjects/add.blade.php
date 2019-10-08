@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/subjects/store">
			@csrf
		  <div class="form-group">
		    <label for="subjects">Subject</label>
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Subject">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection