<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Verification Code - CWD Coffee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .verification-background {
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
            max-width: 400px;
        }
        .verification-input {
            width: 50px;
            height: 50px;
            background: transparent;
            border: 1px solid #ffffff;
            color: white;
            text-align: center;
            font-size: 1.5rem;
            margin-right: 10px;
        }
        .verification-input:focus {
            outline: none;
            border-color: #a0522d;
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

    <div class="verification-background">
        <div class="form-container">
            <img src="{{ asset('images/logo.png') }}" alt="CWD Coffee" width="50" class="mb-3">
            <h2>Enter the Verification Code</h2>
            <p>A verification code has been sent via WhatsApp</p>
            
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif

            <form action="{{ route('verify.code.submit') }}" method="POST">
                @csrf
                <div class="d-flex justify-content-center mb-3">
                    <input type="text" class="verification-input" name="code[]" maxlength="1" required>
                    <input type="text" class="verification-input" name="code[]" maxlength="1" required>
                    <input type="text" class="verification-input" name="code[]" maxlength="1" required>
                    <input type="text" class="verification-input" name="code[]" maxlength="1" required>
                    <input type="text" class="verification-input" name="code[]" maxlength="1" required>
                    <input type="text" class="verification-input" name="code[]" maxlength="1" required>
                </div>
                <button type="submit" class="btn submit-btn mt-3">Verify</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
