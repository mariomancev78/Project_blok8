<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mijn Account</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('popular') }}">Popular</a></li>
            <li><a id="active" href="#"> My Account</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </nav>
    <div class="small_hero">
        <h1>Mijn Account</h1>
    </div>
    <div class="container">
        <div class="formContainer">
            <h2>Log in</h2>
            <form action="" method="post">
                <input type="text" name="username" id="username" placeholder="gebruikersnaam">
                <input type="password" name="password" id="password" placeholder="wachtwoord">
                <input type="submit" value="Log in">
            </form>
        </div>
    </div>
    </div>

    <footer>
        <div class="titleContainter">
            <h3>Footer</h3>
        </div>
        <div class="foot_container">
            <div class="foot_content">
                <h4>Footer Content</h4>
            </div>
            <div class="foot_content">
                <h4>Footer Content</h4>
            </div>
            <div class="foot_content">
                <h4>Footer Content</h4>
            </div>
        </div>
    </footer>
</body>

</html>
