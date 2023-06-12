<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{route('index') }}">Home</a></li>
            <li><a href="{{route('popular') }}">Popular</a></li>
            <li><a href="{{route('account') }}"> My Account</a></li>
            <li><a id="active" href="#">Dashboard</a></li>
        </ul>
    </nav>
    <div class="small_hero">
        <h1>Dashboard</h1>
    </div>
    <div class="container">
        <div class="content">
            <h2>Popular Questions</h2>
            <div class="questionsContainer">
                <div class="question">
                    <h3>Question 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="question">
                    <h3>Question 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="question">
                    <h3>Question 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="question">
                    <h3>Question 4</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="question">
                    <h3>Question 5</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
                <div class="question">
                    <h3>Question 6</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
                </div>
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