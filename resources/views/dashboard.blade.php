@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="small_hero">
        <h1>Dashboard</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Popular Questions</h2>
            <div class="questionsContainer">
                <div class="gridItem">
                    <h3> Questions</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    <a href="#">Edit the  questions</a>
                </div>
                <div class="gridItem">
                    <h3>Comments</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    <a href="#">Edit the comments</a>

                </div>
                <div class="gridItem">
                    <h3>Users</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                    <a href="#">Edit the users</a>
                </div>
            </div>
        </div>
    </div>
@endsection