@extends('levels.layout')

@section('content')
<div class="container py-4">
    <div class="row">
        <img src="{{$level->image}}" style="width: 50%">
    </div>
    <div class="row mt-3">
        <form action="/levels/{{$level->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="solution">Solution</label>
                <input type="text" value="{{$level->solution}}" class="form-control" name="solution">   
                <input type="file" name="image">
                <input class="btn btn-dark mt-1" type="submit" value="Update"> 
            </div>    
            
        </form>     
    </div>
    
</div>
@endsection