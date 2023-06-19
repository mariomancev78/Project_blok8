@extends('layouts.app')
@section('title', 'Account')
@section('content')
    <div class="small_hero">
        <h1>Comments</h1>
    </div>
    <div class="container">
        <div class="formContainer">
            <h2>Pas een comment aan</h2>
            <form action="{{ route('UpdateComment', $comment->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" id="user_id" placeholder="gebruiker" value="{{ $comment->user_id }}" />
                <input type="hidden" name="question_id" id="question_id" placeholder="Vraag" value="{{ $comment->question_id }}" />
                <input type="text" name="title" id="title" placeholder="titel" value="{{ $comment->title }}" />
                <textarea type="text" name="body" id="body" placeholder="comment" rows="10">{{ $comment->body }}
                </textarea>
                <input type="submit" value="Sla de comment op" />
            </form>
        </div>
    </div>
    </div>
