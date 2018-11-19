@extends('backLayout.app')
@section('title')
Book
@stop

@section('content')

    <h1>Book</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $book->id }}</td> <td> {{ $book->name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection