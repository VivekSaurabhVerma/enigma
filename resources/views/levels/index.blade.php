@extends('levels.layout')

@section('content')
    @if(count($levels) > 0)
        @foreach ($levels as $level)
            <div class="container mb-3 bg-secondary">
                <div class="row">
                    <div class="col-sm-4 col-md-4">
                        <img class="card-img-top" src="{{$level->image}}" alt="Enigma Level image">                     
                    </div>
                    <div class="col-md-8 col-sm-8 py-4">
                    <h2>Level {{$level->id}}</h2>
                    <p>{{$level->solution}}<p>
                    <a class="btn btn-dark" href="/levels/{{$level->id}}/edit" role="button">Edit</a>
                    {{-- <a class="btn btn-primary" href="{{ url('/levels/{{$level->id}}/edit') }}" role="button">Delete</a> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="card mb-3">
                <img class="card-img-top" style="height: 100px; width: 100px" src="/storage/level_images/{{$level->image}}" alt="Enigma Level image">
                <div class="card-body">
                <h5 class="card-title">Level {{ $level->id }}</h5>
                <p class="card-text">{{ $level->solution }}</p>
                </div>
          </div> --}}
        @endforeach
    @else
        <h2>No levels found!</h2>
    
    @endif
@endsection