<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Live Chat</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background-color: #3b2314;
        color: #ffffff;
    }

    .navbar {
        display: flex;
        justify-content: center;
        background-color: #5d4037;
        padding: 10px;
    }

    .navbar a {
        margin: 0 15px;
        color: white;
        text-decoration: none;
    }

    .navbar a.active {
        font-weight: bold;
        color: #d6a675;
    }

    .contact-container {
        text-align: center;
        margin: 20px;
    }

    h1 {
        font-size: 2em;
    }

    .chat-box {
        width: 80%;
        margin: 0 auto;
        background-color: #ffffff;
        color: #3b2314;
        border-radius: 10px;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    .user-info {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .user-icon {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .message-box {
        background-color: #b0724d;
        color: white;
        border-radius: 10px;
        padding: 15px;
        width: 100%;
    }

    .message-content ul {
        list-style-type: none;
        padding: 0;
    }

    .message-content ul li::before {
        content: "• ";
        color: #ffdd77;
    }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('product') }}">Product</a>
        <a href="{{ route('contact') }}" class="active">Contact</a>
    </div>

    <!-- Live Chat Section -->
    <div class="contact-container">
        <h1>Promotion</h1>

        <div class="chat-box">
            <!-- User Profile and Name -->
            <div class="user-info">
                <img src="{{ asset('img/profile.png') }}" alt="User Profile" class="user-icon"> <!-- Ganti path sesuai gambar yang kamu punya -->
                <p>Alan - 1</p>
            </div>

            <!-- Chat Message Box -->
            <div class="message-box">
                <div class="message-content">
                    <p>Hai Alan! 👋</p>
                    <p>Kami punya kabar gembira! 🎉🥳</p>
                    <p>Di CWD kami baru saja meluncurkan produk terbaru yang siap memanjakan lidah Anda! ☕🍰</p>
                    <ul>
                        <li>Produk Baru: Nasi Goreng 😋</li>
                        <li>Dibuat dari bahan baku berkualitas terbaik.</li>
                        <li>Kami selalu menghadirkan menu spesial kami!</li>
                    </ul>
                    <p><strong>Promo Spesial Pembelian:</strong></p>
                    <ul>
                        <li>Diskon spesial 15% untuk setiap pembelian produk baru kami sampai 10 Oktober 2024.</li>
                    </ul>
                    <p>Yuk, datang sekarang juga dan coba kenikmatannya!</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
