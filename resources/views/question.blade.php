@extends('layouts.app')

@section('content')
<span id="timer" style="display: none">{{$current_time}}</span>
<div class="row justify-content-center">
    <div class="col-md-6">
        <span id="level-label">Level {{ $question->id }}</span>
        <a id="forum-link" href="https://discord.gg/TX9u4zJ" target="_blank"><span>Forum</span></a>
        {{-- <img class="card-img-top" src="/storage/level_images/{{$question->image}}"> --}}
    <img class="card-img-top" src="{{ $question->image }}">
    </div>
</div>
<form id="my_form" action="/question" method="POST">
    @csrf
    <div class="row mt-3">
        <div id="input-box" class="col-md-8 col-sm-6">
            <input id="input-answer" type="text" name="answer" autocomplete="off" placeholder="Enter something">
            <div><span class="input-border border-mobile"></span></div>
        </div>
        <div class="col-md-4 col-sm-6" id="check-button">
            <a class="flow-button" href="javascript:{}" onclick="document.getElementById('my_form').submit();" style="position: absolute; right:0"><span>Check</span></a>			
        </div>		
    </div>
    <div class="row"><span class="input-border border-desktop"></span></div>
    {{-- <input class="btn btn-dark" type="submit" value="Check"> --}}
</form>

@include('inc.results')

@endsection
