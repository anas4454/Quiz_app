<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard - HiStudy</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #F8FAFF, #EEF2FF);
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background: #1E3A8A;
            padding: 30px 20px;
            position: fixed;
            width: 240px;
        }

        .sidebar h4 {
            color: #fff;
            font-weight: 600;
        }

        .sidebar a {
            display: block;
            color: #CBD5E1;
            padding: 12px;
            margin-top: 10px;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background: #2563EB;
            color: #fff;
        }

        /* Content */
        .main-content {
            margin-left: 260px;
            padding: 40px;
        }

        /* Bulky Header */
        .admin-header {
            background: #fff;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            margin-bottom: 30px;
        }

        .stat-card {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05);
        }

        .logout-btn {
            background: rgb(30, 30, 177);
            padding: 1rem 2rem;
            margin: 2rem;
            margin-top: 12rem;
            border-radius: 1rem;
            border: none;
            color: rgb(249, 249, 249);
            cursor: pointer;
            font: inherit;
        }
    </style>
</head>

<body>

   <x-dashboard.sidebar/>

    {{ $slot }}

</body>

</html>
