@extends('layouts.app')

@section('header')
    <style>
        body {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        #play-pause {
            display: block;
        }

    </style>
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            Game of life!
        </div>

        <div class="main">
            <div id="fps"></div>
            <canvas id="game-of-life-canvas"></canvas>
            <button id="play-pause"></button>
        </div>

        <div class="links m-b-md">
            <a href="{{route('welcome')}}">Go Home</a>
            <a href="{{route('hello-world')}}">Hello World</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{mix('/js/bootstrap.js')}}"></script>
@endsection

