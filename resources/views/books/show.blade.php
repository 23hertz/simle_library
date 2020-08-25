@extends('layouts.app')

@section('content')


<div class="card" style="margin: 5px">
       
        <div class="card-block">
            <h3 class="card-title"><b>Book Title</b> : {{ $book->title }}</h3>
            <p class="card-text"><b>published by</b> : {{ $book->author }}</p>
            <a href="/books" class="btn btn-primary">List Books</a>
            <a href="/books/borrow/{{  $book->id  }}" class="btn btn-primary">Borrow Book</a>
            <a href="/books/returned/{{  $book->id }}" class="btn btn-primary">Return Book</a>
        </div>
    </div>
@endsection
