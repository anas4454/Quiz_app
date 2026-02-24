<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard - HiStudy</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    background: linear-gradient(135deg,#F8FAFF,#EEF2FF);
}

/* Sidebar */
.sidebar{
    height:100vh;
    background:#1E3A8A;
    padding:30px 20px;
    position:fixed;
    width:240px;
}

.sidebar h4{
    color:#fff;
    font-weight:600;
}

.sidebar a{
    display:block;
    color:#CBD5E1;
    padding:12px;
    margin-top:10px;
    text-decoration:none;
    border-radius:8px;
    transition:0.3s;
}

.sidebar a:hover{
    background:#2563EB;
    color:#fff;
}

/* Content */
.main-content{
    margin-left:260px;
    padding:40px;
}

/* Bulky Header */
.admin-header{
    background:#fff;
    padding:30px;
    border-radius:20px;
    box-shadow:0 20px 60px rgba(0,0,0,0.08);
    margin-bottom:30px;
}

.stat-card{
    background:#fff;
    padding:25px;
    border-radius:15px;
    box-shadow:0 10px 40px rgba(0,0,0,0.05);
}

.logout-btn{
    background:#1c3bb9;
    color:#fff !important;
    text-align:center;
    margin-top:20px;
}

.logout-btn:hover{
    background:#B91C1C;
}
.logout-button{
    margin-top: 13rem;
}

</style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>HiStudy Admin</h4>
    <a href="admin-dashboard.html">Dashboard</a>
    <a href="create-quiz.html">Create Quiz</a>
    <a href="add-questions.html">Add Questions</a>
    <a href="users.html">View Users</a>
    <a href="results.html">View Results</a>
    <a href="analytics.html">Analytics</a>
       <!-- Logout at Bottom -->
    <div class="logout-button">
        <a href="admin-login.html" class="logout-btn">
             Logout
        </a>
    </div>

</div>

<!-- Main Content -->
<div class="main-content">

    <div class="admin-header">
        <h3>Welcome Back, Admin 👋</h3>
        <p class="text-muted">Manage quizzes, users, and analytics from here.</p>
    </div>

    <div class="row g-4">
        <div class="col-md-4">
            <div class="stat-card">
                <h5>Total Quizzes</h5>
                <h3>15</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <h5>Total Users</h5>
                <h3>120</h3>
            </div>
        </div>

        <div class="col-md-4">
            <div class="stat-card">
                <h5>Total Attempts</h5>
                <h3>560</h3>
            </div>
        </div>
    </div>

</div>

</body>
</html>
