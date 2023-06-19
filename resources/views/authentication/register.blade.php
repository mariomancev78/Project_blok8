    @extends('layouts.app')
    @section('title', 'Register')
    @section('content')
        <div class="small_hero">
            <h1>Mijn Account</h1>
        </div>
        <div class="container">
            <div class="formContainer">
                <h2>Registreren</h2>
                <form action="{{ route('CreateUser') }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="name" id="name" placeholder="gebruikersnaam">
                    <input type="password" name="password" id="password" placeholder="wachtwoord">
                    <input type="submit" value="Registreer Account">
                </form>
                <p>Al in het bezit van een account? <a href="{{ route('login') }}">log in</a> </p>
            </div>
        </div>
        </div>
    @endsection
