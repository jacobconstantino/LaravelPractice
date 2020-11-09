@extends('welcome')

@section('content')

<table class="table table-dark">
			<tr>
				<th>Todo ID</th>
				<th>Acitivty</th>
				<th>Created On</th>
				<th>Action</th>
			</tr>
			@foreach($data as $jacob)
			<tr>
				<td>{{$jacob->todo_id}}</td>
				<td>{{$jacob->activity}}</td>
				<td>{{$jacob->created_at}}</td>
				
				<td><a href="/edit/{{$jacob->todo_id}}" class="btn btn-success">Edit</a> | <a href="/delete/{{$jacob->todo_id}}" class="btn btn-danger">Delete</a></td>
			</tr>
			@endforeach



	
@endsection

