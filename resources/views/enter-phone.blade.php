<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Phone Number - CWD Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .register-background {
            background-image: url('{{ asset('images/coffee-background2.jpg') }}'); /* Ganti dengan path yang sesuai */
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .form-container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 8px;
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            background: transparent;
            border: 1px solid #ffffff;
            color: white;
        }
        .form-control::placeholder {
            color: #cccccc;
        }
        .submit-btn {
            background-color: #a0522d;
            color: white;
            border: none;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #8b4513;
        }
    </style>
</head>
<body>

    <div class="register-background">
        <div class="form-container">
            <img src="{{ asset('images/logo.png') }}" alt="CWD Coffee" width="50" class="mb-3">
            <h2>Enter Phone Number</h2>
            <p>Make sure your number is active for security and ease of transactions</p>
            
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form action="{{ route('register.phone.submit') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="tel" class="form-control" name="phone_number" placeholder="Phone Number" required>
                </div>
                <p class="small text-muted">We will send a verification code via WhatsApp</p>
                <button type="submit" class="btn submit-btn mt-3">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
