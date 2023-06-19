<nav>
    <ul>
        <li><a href="{{ route('index') }}">Home</a></li>
        <li><a href="{{ route('popular') }}">Popular</a></li>

        @if (session()->has('LoggedUser'))
            @if (session()->get('LoggedUserRole') == 'admin')
                <li><a href="{{ route('Dashboard') }}">Dashboard</a></li>
            @endif
            <li><a href="{{ route('LogoutUser') }}">Logout</a></li>
        @else
        <li><a href="{{ route('login') }}"> Inloggen</a></li>
        <li><a href="{{ route('register') }}"> Registreren</a></li>
        @endif


    </ul>
</nav>
