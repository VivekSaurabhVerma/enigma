@if(session('success'))
    <div class="typewriter text-center">
        <h2>{{session('success')}}</h2>
    </div>
@endif

@if(session('error'))
    <div class="typewriter text-center mt-3">
        <h2>{{session('error')}}</h2>
    </div>
@endif
