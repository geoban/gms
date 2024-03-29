@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Adviser Section</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teachers as $teacher)
					<tr>
						<td>{{ $teacher->id }}</td>
						<td>{{ $teacher->name }}</td>
						<td>{{ $teacher->advisory_section }}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/teachers/add'>Add New Teacher</a>
		<a class="btn btn-primary" href='/'>Main</a>
	</div>
@endsection
