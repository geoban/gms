@extends('layouts.master')
@section('content')
	<div class="container">
		<form method="POST" action="/sections/store">
			@csrf
		  <div class="form-group">
		    <label for="section">Section</label>
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Section">
		  </div>
		    <div class="form-group">
		    <label for="is_active">Is_Active</label>
		    <input type="text" class="form-control" name='is_active' aria-describedby="emailHelp" placeholder="Is Active">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection