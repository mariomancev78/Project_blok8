    @extends('layouts.app')
    @section('title', 'Account')
    @section('content')
        <div class="small_hero">
            <h1>Mijn Account</h1>
        </div>
        <div class="container">
            <div class="formContainer">
                <h2>Log in</h2>
                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="username" id="username" placeholder="gebruikersnaam">
                    <input type="password" name="password" id="password" placeholder="wachtwoord">
                    <input type="submit" value="Log in">
                    <p>nog geen account? <a href="{{ route('register') }}">Maak er een aan</a> </p>
                </form>
            </div>
        </div>
        </div>
    @endsection
