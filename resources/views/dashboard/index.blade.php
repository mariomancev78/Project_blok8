@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="small_hero">
        <h1>Dashboard</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Pas de gegevens aan:</h2>
            <div class="questionsContainer">
                <div class="gridItem">
                    <h3> Questions</h3>
                    <a href="{{ route('QuestionDashboard') }}">bewerk de vragen</a>
                </div>
                <div class="gridItem">
                    <h3>Comments</h3>
                    <a
                        href="{{ route('CommentDashboard') }}">bewerk de Comments</a>

                </div>
                <div class="gridItem">
                        <h3>Users</h3>
                        <a href="{{ route('UserDashboard') }}">bewerk de gebruikers</a>
                </div>
            </div>
        </div>
    </div>
@endsection
