@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-success" role="alert">
                    <a href="/createbooks" class="btn btn-primary">Create Book</a>
                    </div>

                
                    
                    <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Book</th>
                        <th>Author</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->quantity }}</td>
                        <td>
                        <form action="/delete/{{$book->id}}" method="post"><br>
                            {{ csrf_field('DELETE') }}
                         <button type="submit" class="btn btn-danger" >delete</button>
                       </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

                  
                </div>  
            
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
