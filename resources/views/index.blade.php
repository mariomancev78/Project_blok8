<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a id="active" href="#">Home</a></li>
            <li><a href="{{ route('popular') }}">Popular</a></li>
            <li><a href="{{ route('account') }}"> My Account</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
        </ul>
    </nav>
    <div class="hero">
        <h1>Home</h1>
    </div>
    <div class="container">
        <div class="formContainer">
            <h2>Stel een vraag</h2>
            <form action="" method="POST">
                <input type="text" name="name" id="name" placeholder="naam">
                <input type="text" name="title" id="title" placeholder="titel">
                <input type="text" name="beschrijving" id="description" placeholder="beschrijving">
                <textarea name="content" id="content" cols="30" rows="10" placeholder="Jouw vraag"> </textarea>
                <input type="submit" value="Submit">
                <p>nog geen account? <a href="{{ route('account') }}">Maak er een aan</a> </p>
            </form>
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
