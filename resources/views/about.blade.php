<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - CWD Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            color: white;
            background-image: url('{{ asset('images/coffee-background.jpg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .header {
            width: 100%;
            padding: 15px 30px;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            width: 50px;
        }

        .navbar {
            display: flex;
            gap: 20px;
        }
        
        .nav-link {
            color: white;
            font-weight: bold;
            text-decoration: none;
        }

        .nav-link:hover {
            color: #a0522d; 
            text-decoration: underline;
        }

        .content-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            max-width: 800px;
            text-align: center;
            border-radius: 8px;
            margin-top: 50px;
        }

        h1, h2 {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="{{ asset('images/logo.png') }}" alt="CWD Coffee" class="logo">
        <nav class="navbar">
            <a href="#" class="nav-link">Home</a>
            <a href="#" class="nav-link">About</a>
            <a href="#" class="nav-link">Product</a>
            <a href="#" class="nav-link">Contact</a>
        </nav>
    </div>
    <div class="content-container">
        <h1>Welcome to CWD Coffee</h1>
        <p>
            We believe that every cup of coffee tells a story. From the rich aroma of freshly ground beans to the first sip of our hand-crafted brews, our mission is to provide you with more than just coffee – we want to offer you an experience.
        </p>
        <h2>Our Coffee</h2>
        <p>
            We take pride in sourcing the finest beans from ethical and sustainable farms around the world. Each batch is roasted to perfection, ensuring every cup is as fresh and flavorful as possible.
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
