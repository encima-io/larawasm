@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Laravel + WebAssembly
            </div>

            <div class="links m-b-md">
                <a href="{{route('hello-world')}}">Hello World</a>
                <a href="{{route('game-of-life')}}">Game of Life</a>
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Laravel</a>
                <a href="https://rustwasm.github.io/book/">Rust+WebAssembly</a>
                <a href="https://github.com/e2-consult">GitHub</a>
            </div>
        </div>
    </div>
@endsection
