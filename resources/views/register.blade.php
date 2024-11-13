<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration - CWD Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .registration-background {
            background-image: url('{{ asset('images/coffee-background2.jpg') }}');
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
            max-width: 500px;
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

    <div class="registration-background">
        <div class="form-container">
            <img src="{{ asset('images/logo.png') }}" alt="CWD Coffee" width="50" class="mb-3">
            <h2>Registration</h2>
            
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form action="{{ route('register.submit') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control" name="age" placeholder="Age" required>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn submit-btn mt-3">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
