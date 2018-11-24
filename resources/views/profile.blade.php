@extends('layouts.layout')

@section('title')
    Blog
@endsection

@section('content')
<div class="unit-5 overlay" style="background-image: url('https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=1fd72b80aa0b43f74015163c2ad6fcc5&w=1000&q=80');">
      <div class="container text-center">
        <h2 class="mb-0">Profile</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">></span> <span>Profile</span></p>
      </div>
		</div>
		
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
					<th scope="col">Action</th>
		    </tr>
		  </thead>

		  <tbody>
		  	@foreach($user->books as $book)
				<tr>
			      <th> <a href="{{ route('show_book',$book->id)}}">{{ $book->name }}</a></th>
			      <td>{{ $book->category->name }}</td>
			      <td>{{ $book->city->name }}</td>
			      <td>{{ $book->author }}</td>
			      <td>{{ $book->year }}</td>
			      <td>{{ $book->condition }}</td>
						<td>
							<form action="{{route('delete',$book->id)}}" method="post">
								{{ csrf_field() }}
								<input type="submit" value="delete" class="btn btn-danger">
							</form>
						</td>
		    	</tr>
		  	@endforeach
		  </tbody>
		</table>
	</div>
@endsection