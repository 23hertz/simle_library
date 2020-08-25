@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <form method="post">
        {{ csrf_field() }}


        <div class="form-group row">
            <label for="releasedateid" class="col-sm-3 col-form-label">Book Quantity</label>
            
            <div class="col-sm-9">
                <input name="quantity" type="number" class="form-control" id="quantity"
                    placeholder="Book Quantity" required value="{{ old('quantity') }}">
            </div>
        </div>

       
        <div class="form-group row">
            <div class="offset-sm-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Borrow</button>
            </div>
        </div>

    </form>

        </div>
    </div>
</div>    
@endsection
