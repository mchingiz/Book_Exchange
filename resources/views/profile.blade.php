@extends('layouts.layout')

@section('title')
    Blog
@endsection

@section('content')
	<div class="container">
		<h1>{{$user->name}}'s books</h1>

		<table class="table bg-white table-bordered">
		  <thead class="thead-dark">
		    <tr>
		    	<th scope="col">Name</th>
		      	<th scope="col">Category</th>
			    <th scope="col">City</th>
			    <th scope="col">Author</th>
			    <th scope="col">Year</th>
			    <th scope="col">Condition</th>
		    </tr>
		  </thead>

		  <tbody>
		  	@foreach($user->books as $book)
				<tr>
			      <th> <a href="#">{{ $book->name }}</a></th>
			      <td>{{ $book->category->name }}</td>
			      <td>{{ $book->city->name }}</td>
			      <td>{{ $book->author }}</td>
			      <td>{{ $book->year }}</td>
			      <td>{{ $book->condition }}</td>
		    	</tr>
		  	@endforeach
		  </tbody>
		</table>
	</div>
@endsection