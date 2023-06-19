@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="hero">
        <h1>Home</h1>
    </div>

    <div class="container">
        <div class="formContainer">
            
            @if (session()->has('message'))
            <div class="alert">
                {{ session('message') }}
            </div>
            @endif

            <h2>Stel een vraag</h2>
            <form action="{{ route('CreateQuestion') }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="name" id="name" placeholder="naam">
                <input type="text" name="title" id="title" placeholder="titel">
                <input type="text" name="description" id="description" placeholder="beschrijving">
                <textarea name="body" id="body" cols="30" rows="10"> </textarea>
                <input type="submit" value="Submit">
            </form>
            <p>nog geen account? <a href="{{ route('account') }}">maak er een aan</a> </p>
        </div>
    </div>
@endsection