@extends('layouts.app')

@section('content')
<span id="timer" style="display: none">{{$current_time}}</span>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header" style="text-align: center">THE GAME</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (Auth::user()->level == 1)
                        <h2>Begin your journey!</h2>
                        <a class="flow-button mx-auto" href="{{ url('/question') }}" role="button"><span>Start</span></a>
                    @else
                        <h3>You are at level {{ auth()->user()->level}}</h3>
                        <h2>Continue your journey</h2>
                        <a class="flow-button mx-auto" href="{{ url('/question') }}" role="button"><span>Resume</span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
