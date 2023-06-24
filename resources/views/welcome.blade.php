@extends('layout.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    
    <div class="content">
        <br><br>
        <img src="/images/eraydura.jpg" width="50%" alt="pizza house logo">
        <div class="title m-b-md">
            Eray Dura
        </div>
    </div>
</div>
@endsection