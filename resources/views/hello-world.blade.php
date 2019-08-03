@extends('layouts.app')

@section('scripts')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Hello there!
            </div>
            <p>Did you get the alert?</p>

            <div class="links m-b-md">
                <a href="{{route('welcome')}}">Go Home</a>
                <a href="{{route('game-of-life')}}">Game of Life</a>
            </div>
        </div>
    </div>

    <script src="{{mix('/js/hello-world.js')}}"></script>
@endsection
