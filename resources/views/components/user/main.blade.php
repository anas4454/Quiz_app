<!DOCTYPE html>
<html>

<head>
    <title>Dashboard - ProQuiz</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #F1F5F9;
        }

        .navbar {
            background-color: #0F172A;
        }

        .navbar-brand {
            font-weight: 600;
            color: #fff !important;
        }

        .nav-link {
            color: #cbd5e1 !important;
        }

        .nav-link:hover {
            color: #fff !important;
        }

        .footer {
            background-color: #0F172A;
            color: #cbd5e1;
            padding: 20px 0;
            text-align: center;
            margin-top: 60px;
        }

        .card-custom {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .btn-primary {
            background-color: #2563EB;
            border: none;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 15px;
            transition: 0.3s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .timer {
            font-weight: 600;
            color: #EF4444;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #F8FAFF, #EEF2FF);
        }

        /* Navbar */
        .modern-navbar {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            padding: 18px 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Brand */
        .brand-logo {
            font-weight: 700;
            font-size: 22px;
            background: linear-gradient(90deg, #2563EB, #6366F1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Nav Links */
        .nav-link {
            font-weight: 500;
            color: #334155 !important;
            position: relative;
            transition: 0.3s;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0%;
            height: 2px;
            background: #2563EB;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: #2563EB !important;
        }

        /* Profile */
        .profile-link {
            text-decoration: none;
            color: #334155;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .profile-img {
            border-radius: 50%;
            border: 2px solid #6366F1;
        }

        /* Notification */
        .notification {
            position: relative;
            font-size: 20px;
            cursor: pointer;
        }

        .notify-dot {
            position: absolute;
            top: 2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: #EF4444;
            border-radius: 50%;
        }

        .modern-navbar {
            background: #1E3A8A;
            /* Deep Blue */
            padding: 18px 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .nav-link {
            color: #E2E8F0 !important;
        }

        .nav-link:hover {
            color: #FFFFFF !important;
        }

        .profile-link {
            color: #E2E8F0;
        }
    </style>
</head>

<body>

    {{-- navbar start here --}}
    <nav class="navbar navbar-expand-lg modern-navbar">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand brand-logo" href="{{ route('user-dashboard') }}">
                HiStudy
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">

                <!-- Center Links -->
                <ul class="navbar-nav mx-auto gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('user-dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user-quiz') }}">Quizzes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user-result') }}">Results</a>
                    </li>
                </ul>

                <!-- Right Side -->
                <div class="d-flex align-items-center gap-4">

                    <!-- Notification -->
                    <div class="notification">
                        🔔
                        <span class="notify-dot"></span>
                    </div>


                    <a href="{{ route('login') }}">
                        <button class="border-0 shadow-lg rounded-2 p-2">Login</button>
                    </a>
                    <!-- Profile -->

                    {{-- <div class="dropdown">
                        <a class="profile-link dropdown-toggle" href="{{ route('user-profile') }}" role="button" data-bs-toggle="dropdown">

                            <span>Anas</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg rounded-4">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item text-danger" href="login.html">Logout</a></li>
                        </ul>
                    </div> --}}

                </div>

            </div>
        </div>
    </nav>
    {{-- navbar ends here --}}


    {{ $slot }}


    <footer class="footer">
        © 2026 ProQuiz. All Rights Reserved.
    </footer>

</body>

</html>
