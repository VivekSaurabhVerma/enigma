@extends('levels.layout')

@section('content')
    <div class="container text-center">
        <form action="/levels" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <label class="col-md-4 col-sm-4" for="image">Image</label>
                <input type="file" class="col-md-8 col-sm-8" name="image">
            </div>
            <div class="row">
                <label class="col-md-4 col-sm-4" for="solution">Solution</label>
                <input class="col-md-8 col-sm-8" type="text" placeholder="Solution" name="solution">                   
            </div>  
            <input class="btn btn-dark mt-1" type="submit" value="Add level"> 
        </form>  
    </div>
@endsection