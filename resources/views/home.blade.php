<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | CWD Coffee</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 5%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .logo img {
            height: 40px;
        }

        .nav-links {
            list-style: none;
            display: flex;
        }

        .nav-links li {
            margin-left: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            padding: 8px 12px;
            transition: background-color 0.3s;
        }

        .nav-links a:hover {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }

        .register-button {
            background-color: #8B4513;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .hero {
            background-image: url('{{ asset('images/coffee-background.jpg') }}'); 
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }

        .hero h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .coffee-cup {
            width: 80px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="CWD Coffee">
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#" class="register-button">Register</a></li>
        </ul>
    </nav>

    <section class="hero">
        <h1>Enjoy The Most Delicious Coffee</h1>
        <p>Start the day and lift your mood with coffee</p>
        <img src="{{ asset('images/coffee-cup.jpg') }}" alt="Coffee Cup" class="coffee-cup">
    </section>
</body>
</html>
