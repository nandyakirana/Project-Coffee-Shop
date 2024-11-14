<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Menu - CWD Coffee</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Style Umum */
        body {
            background-image: url('images/coffee-background.jpg');
            background-size: cover;
            background-position: center;
            color: white;
        }

        /* Navbar */
        .navbar {
            background-color: transparent;
        }
        .navbar-brand img {
            width: 50px;
            height: auto;
        }
        .navbar-nav .nav-link {
            color: white;
            margin: 0 10px;
        }
        .navbar-nav .nav-link:hover {
            color: #a0522d;
        }

        /* Header */
        h2 {
            font-size: 2.5rem;
            margin-top: 40px;
            margin-bottom: 30px;
            text-align: center;
            color: white;
        }

        /* Card Produk */
        .card {
            background-color: rgba(139, 69, 19, 0.9); /* Warna coklat transparan */
            border-radius: 10px;
            text-align: center;
            color: white;
            padding: 15px;
        }
        .card-img-top {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="CWD Coffee Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Judul Halaman -->
    <div class="container">
        <h2>Our Menu</h2>

        <!-- Grid Produk -->
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="images/product.jpg" class="card-img-top" alt="Nama Menu">
                    <div class="card-body">
                        <h5 class="card-title">Nama Menu</h5>
                        <p class="card-text">Keterangan</p>
                        <p class="card-text">Harga</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak produk dengan struktur yang sama -->
            <div class="col">
                <div class="card h-100">
                    <img src="images/product.jpg" class="card-img-top" alt="Nama Menu">
                    <div class="card-body">
                        <h5 class="card-title">Nama Menu</h5>
                        <p class="card-text">Keterangan</p>
                        <p class="card-text">Harga</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/product.jpg" class="card-img-top" alt="Nama Menu">
                    <div class="card-body">
                        <h5 class="card-title">Nama Menu</h5>
                        <p class="card-text">Keterangan</p>
                        <p class="card-text">Harga</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="images/product.jpg" class="card-img-top" alt="Nama Menu">
                    <div class="card-body">
                        <h5 class="card-title">Nama Menu</h5>
                        <p class="card-text">Keterangan</p>
                        <p class="card-text">Harga</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
