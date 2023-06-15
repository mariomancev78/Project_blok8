@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="hero">
        <h1>Home</h1>
    </div>

    <div class="container">
        <div class="formContainer">
            <h2>Stel een vraag</h2>

            @if (session()->has('LoggedUser'))

            <form action="{{ route('CreateQuestion') }}" method="POST">
                {{ csrf_field() }}
                <input type="text" name="title" id="title" placeholder="titel">
                <input type="text" name="description" id="description" placeholder="beschrijving">
                <textarea name="body" id="body" cols="30" rows="10"> </textarea>
                <input type="submit" value="Submit">
            </form>
            @else
            <p>Om een vraag te stellen moet je eerst inloggen</p>
            <p>Nog geen account? <a href="{{ route('account') }}">maak er een aan</a> </p>
            <p>Al in het bezit van een account? <a href="{{ route('account') }}">log in</a> </p>
            @endif
           
        </div>
    </div>
@endsection
