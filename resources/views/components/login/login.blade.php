<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - HiStudy</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg,#F8FAFF,#EEF2FF);
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background: #fff;
            border-radius: 20px;
            padding: 50px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.08);
        }

        .brand-title {
            font-weight: 700;
            font-size: 28px;
            color: #1E3A8A;
        }

        .btn-primary {
            background: #2563EB;
            border: none;
            padding: 10px;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background: #1D4ED8;
        }

        .form-control {
            border-radius: 8px;
            padding: 10px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #2563EB;
        }

        .forgot-link {
            font-size: 14px;
            text-decoration: none;
            color: #2563EB;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <div class="text-center mb-4">
            <h2 class="brand-title">HiStudy</h2>
            <p class="text-muted">Welcome back! Please login.</p>
        </div>

        {{-- Session Status --}}
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

    {{ $slot }}
    </div>

</div>

</body>
</html>
