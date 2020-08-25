@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

           @foreach($books as $book)
               <div class="card" style="margin-top:10px">

                    <div class="card-body">
                        <div class="card-block">
                      
                            <h3 class="card-title">Book Title : {{ $book->title }}</h3>
                            <p class="card-text"><b>Book Author</b> : {{ $book->author }}</p>
                            <p class="small"><b>Book Quantity</b> : {{ $book->quantity }}</p>
                            <a href="books/{{ $book->id }}" class="btn btn-primary">Learn More</a>
                       
                        </div>
                    </div>

                </div>
            
            @endforeach
        </div>
    </div>
</div>    
@endsection
