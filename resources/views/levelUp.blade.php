@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="question-label">
            <span id="level-label">Level {{ $question->id }}</span>
            <a id="forum-link" href="" target="_blank"><span>Forum</span></a>
        </div>
        <img class="card-img-top" src="{{$question->image}}">
        <div class="overlay" id="slider"></div>
        <div class="circle-loader">
            <div class="checkmark draw"></div>
        </div>
    </div>
</div>
<form id="levelup_form" action="/levelup" method="POST" class="my-3">
    @csrf
    <a class="flow-button" href="javascript:{}" onclick="document.getElementById('levelup_form').submit();"><span>Level Up</span></a>			
</form>
<div class="typewriter text-center">
    <h2>Congratulations! You levelled up</h2>
</div>
@endsection

{{-- <h2>Levelled Up!</h2>
<form id="my_form" action="/levelup" method="POST">
    @csrf
    <a class="flow-button" href="javascript:{}" onclick="document.getElementById('my_form').submit();"><span>Level Up</span></a>			
</form> --}}