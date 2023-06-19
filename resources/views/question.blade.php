@extends('layouts.app')
@section('title', 'Enkele Vraag')
@section('content')
    <div class="small_hero">
        <h1>Enkele Vraag:</h1>
    </div>
    <div class="container">
        <div class="formContainer">
            <h2>{{ $questions->title }}</h2>
            <div class="descriptionContainer">
                {{ $questions->description }}
            </div>
            <div class="bodyContainer">
                {{ $questions->body }}
            </div>

            <div class="commentContainer">
                <h2>Comments</h2>
                @foreach ($comments as $comment)
                    <div class="comment">
                        <div class="commentTitle">
                            {{ $comment->title }}
                        </div>
                        <div class="commentBody">
                            {{ $comment->body }}
                        </div>
                        @foreach ($users as $user)
                                <div class="commentUser">
                                   <p>Geplaatst door: {{ $user->name }}</p>
                                </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>

        @if (session()->has('LoggedUser'))
            <div class="formContainer">
                <h2>Plaats een comment</h2>
                <form action="{{ route('CreateComment') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{ session()->get('LoggedUser') }}" />
                    <input type="hidden" name="question_id" value="{{ $questions->id }}" />
                    <input type="text" name="title" id="title" placeholder="titel" />
                    <input type="text" name="body" id="title" placeholder="comment" />
                    <input type="submit" value="Plaats de comment" />
                </form>
            </div>
        @endif
    </div>
    </div>
