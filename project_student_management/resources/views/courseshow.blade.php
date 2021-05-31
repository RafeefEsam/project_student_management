<?php
session_start();
?>
@extends('layout.default')

@section('content')
<h1>Course </h1>
<table class="table table-bordered">
	<thead>
		
		<th>Course name</th>
		<th>Program name</th>
		<th>Edit</th>
		<th>Delete</th>
		<th>Add </th>

	</thead>
	<tbody>

			@foreach($courses as $course)
			<tr>
			
			<td>{{$course->cname}}</td>
			<td>{{$course->branchname}}</td>

			<td><a href="{{route('course.edit', ['id' => $course->id])}}">Edit</a></td>
			<td><a href="{{route('course.delete', ['id' => $course->id])}}">delete</a></td>

			<td><a href="create">Upload File</a></td> 
			
			</tr>
			@endforeach

	</tbody>
</table>
@endsection
