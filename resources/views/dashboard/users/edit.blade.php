    @extends('layouts.app')
    @section('title', 'Account')
    @section('content')
        <div class="small_hero">
            <h1>Mijn Account</h1>
        </div>
        <div class="container">
            <div class="formContainer">
                <h2>Pas een gebruiker aan</h2>
                <form action="{{ route('UpdateUser', $user->id) }}" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="name" id="name" placeholder="gebruikersnaam" value="{{ $user->name }}">
                    <input type="password" name="password" id="password" placeholder="wachtwoord" value="">

                    <select name="role" id="role" placeholder="Rol" value="{{ $user->role }}">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    <input type="submit" value="Sla de gegevens op" />
                </form>
            </div>
        </div>
        </div>
    @endsection
