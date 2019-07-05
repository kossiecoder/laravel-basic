@extends('layout')

@section('title')
    Welcome
@endsection

@section('content')
    Welcome
    <ul>
        @foreach($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>
@endsection