<x-dashboard.main>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Quiz Results - HiStudy Admin</title>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #F8FAFF, #EEF2FF);
            }

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

            .sidebar a:hover,
            .sidebar a.active {
                background: #2563EB;
                color: #fff;
            }

            .main-content {
                margin-left: 260px;
                padding: 40px;
            }

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
                margin-bottom: 30px;
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

        <!-- Main Content -->
        <div class="main-content">
            <div class="admin-header">
                <h3>Quiz Results</h3>
            </div>
            <div class="stat-card">
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Quiz</th>
                            <th>Score</th>
                            <th>Questions</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($results as $result)
                        <tr>
                            <td>{{ $result->user->name ?? '-' }}</td>
                            <td>{{ $result->quiz->title ?? '-' }}</td>
                            <td>{{ $result->score }}</td>
                            <td>{{ $result->question }}</td>
                            <td>{{ $result->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    </html>


</x-dashboard.main>
