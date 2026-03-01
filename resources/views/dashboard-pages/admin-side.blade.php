<x-dashboard.main>


    <!-- Main Content -->
    <div class="main-content">

        <div class="admin-header d-flex align-items-center justify-content-between mb-5"
            style="background: linear-gradient(135deg, #EEF2FF 60%, #2563EB 100%);">
            <div>
                <h2 class="fw-bold mb-2" style="font-size:2.2rem;">Welcome Back, {{Auth::user()->name  }} 👋</h2>
                <p class="text-muted mb-0" style="font-size:1.1rem;">Manage quizzes, users, and analytics from your
                    premium dashboard.</p>
            </div>
            <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Admin Icon"
                style="width:80px;height:80px;">
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="stat-card text-center shadow-lg border-0"
                    style="background: linear-gradient(135deg, #F8FAFF 80%, #2563EB 20%);">
                    <div class="mb-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/3064/3064197.png" alt="Quiz Icon"
                            style="width:40px;height:40px;">
                    </div>
                    <h5 class="fw-semibold">Total Quizzes</h5>
                    <h2 class="fw-bold text-primary" style="font-size:2rem;">{{ $total_quiz }}</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card text-center shadow-lg border-0"
                    style="background: linear-gradient(135deg, #F8FAFF 80%, #1E3A8A 20%);">
                    <div class="mb-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/1077/1077114.png" alt="User Icon"
                            style="width:40px;height:40px;">
                    </div>
                    <h5 class="fw-semibold">Total Users</h5>
                    <h2 class="fw-bold text-success" style="font-size:2rem;">{{ $totalUsers ?? 0 }}</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card text-center shadow-lg border-0"
                    style="background: linear-gradient(135deg, #F8FAFF 80%, #EF4444 20%);">
                    <div class="mb-2">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" alt="Attempts Icon"
                            style="width:40px;height:40px;">
                    </div>
                    <h5 class="fw-semibold">Total Attempts</h5>
                    <h2 class="fw-bold text-danger" style="font-size:2rem;">{{ $totalAttempts ?? 0 }}</h2>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-8">
                <div class="stat-card shadow-lg border-0 p-4" style="min-height:220px;">
                    <h5 class="fw-semibold mb-3">Recent Activity</h5>
                    <ul class="list-group">
                        @foreach ($recentActivities ?? [] as $activity)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{{ $activity['description'] }}</span>
                                <span class="badge bg-primary rounded-pill">{{ $activity['time'] }}</span>
                            </li>
                        @endforeach
                        @if (empty($recentActivities))
                            <li class="list-group-item text-muted">No recent activity.</li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card shadow-lg border-0 p-4 d-flex flex-column align-items-center justify-content-center"
                    style="min-height:220px;">
                    <h5 class="fw-semibold mb-3">Quick Actions</h5>
                    <a href="{{ route('admin.dashboard.quiz') }}" class="btn btn-primary mb-2 w-100">Create New Quiz</a>
                    <a href="{{ route('admin.dashboard.question') }}" class="btn btn-outline-primary mb-2 w-100">Add
                        Question</a>
                    <a href="{{ route('admin.dashboard.analytics') }}" class="btn btn-outline-success w-100">View
                        Analytics</a>
                </div>
            </div>
        </div>

    </div>


</x-dashboard.main>
