<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Gaya untuk seluruh halaman */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('/images/coffee-background.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* Gaya untuk kontainer form */
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
        }

        /* Gaya untuk logo */
        .logo {
            width: 80px;
            margin-bottom: 20px;
        }

        /* Gaya untuk judul halaman */
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        /* Gaya untuk teks input */
        .input-group {
            margin: 15px 0;
            text-align: left;
        }

        .input-group label {
            font-size: 14px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            font-size: 16px;
            margin-top: 5px;
        }

        /* Gaya untuk tombol submit */
        .btn {
            background-color: #5e3b1b;
            color: #fff;
            padding: 10px;
            font-size: 16px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #3e2711;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="/images/cwd-coffee-logo.png" alt="CWD Coffee Logo" class="logo">
        <h1>Login</h1>
        <form>
            <div class="input-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" placeholder="Phone Number">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
