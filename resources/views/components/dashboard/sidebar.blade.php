 <!-- Sidebar -->
    <div class="sidebar">
        <h4>HiStudy Admin</h4>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('admin.dashboard.quiz') }}">Create Quiz</a>
        <a href="{{ route('admin.dashboard.question') }}">Add Questions</a>
        <a href="{{ route('admin.dashboard.user') }}">View Users</a>
        <a href="{{ route('admin.dashboard.result') }}">View Results</a>
        <a href="{{ route('admin.dashboard.analytics') }}">Analytics</a>
        <!-- Logout at Bottom -->
        <div class="logout-button">
            <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                @csrf
                <button type="submit" class="logout-btn">
                    Logout
                </button>
            </form>
        </div>

    </div>
