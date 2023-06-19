@extends('layouts.app')
@section('title', 'Popular')
@section('content')
    <div class="small_hero">
        <h1>Populair</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Populaire Vragen</h2>
            <div class="questionsContainer">
                @foreach ($questions as $question)
                <div class="question">
                    <h3>{{$question->title}}</h3>
                    <p>{{$question->description}}</p>
                    <p>{{$question->name}}</p>
                    <a href="{{route('ShowQuestion',$question->id)}}">Bekijk Dit bericht</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection