@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <form method="post" action="/books">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="titleid" class="col-sm-3 col-form-label">Book Title</label>
            <div class="col-sm-9">
                <input name="title" type="text" class="form-control" id="title" placeholder="Book Title" required
                       value="{{ old('title') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="publisherid" class="col-sm-3 col-form-label">Book Author</label>
            <div class="col-sm-9">
                <input name="author" type="text" class="form-control" id="author"
                       placeholder="Book Author" required value="{{ old('Author') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Book Quantity</label>
            <div class="col-sm-9">
                <input name="quantity" type="text" class="form-control" id="quantity"
                    placeholder="Book Quantity" required value="{{ old('quantity') }}">
            </div>
        </div>

        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">About Book</label>
            <div class="col-sm-9">
            <textarea name="about" id="about"  class="form-control" placeholder="About Author"></textarea>
            </div>
        </div>
       
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Submit Book</button>
            </div>
        </div>
        @include('partials.formerrors')
    </form>

        </div>
    </div>
</div>  

@endsection
