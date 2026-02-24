<x-user.main>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile - HiStudy</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    font-family:'Poppins',sans-serif;
    background: linear-gradient(135deg,#F8FAFF,#EEF2FF);
}

/* Navbar */
.navbar{
    background:#1E3A8A;
    padding:18px 0;
}

.navbar-brand{
    font-weight:700;
    font-size:22px;
    color:#fff !important;
}

/* Profile Section */
.profile-wrapper{
    margin-top:70px;
}

.profile-card{
    background:#fff;
    border-radius:20px;
    padding:40px;
    box-shadow:0 20px 60px rgba(0,0,0,0.08);
}

/* Avatar */
.profile-avatar{
    width:120px;
    height:120px;
    border-radius:50%;
    border:4px solid #2563EB;
    object-fit:cover;
}

/* Stats */
.stat-box{
    background:#F1F5FF;
    padding:20px;
    border-radius:15px;
    text-align:center;
}

.stat-box h4{
    margin:0;
    font-weight:600;
}

.stat-box p{
    margin:0;
    color:#64748B;
}

/* Buttons */
.btn-primary{
    background:#2563EB;
    border:none;
    padding:10px 25px;
    border-radius:8px;
}

.btn-outline-secondary{
    border-radius:8px;
}

</style>
</head>
<body>

<!-- Profile Content -->
<div class="container profile-wrapper">

    <div class="profile-card">

        <div class="row align-items-center">

            <!-- Left Column -->
            <div class="col-md-4 text-center">
                <img src="https://i.pravatar.cc/200" class="profile-avatar mb-3">
                <h4>Anas Khan</h4>
                <p class="text-muted">anas@email.com</p>
                <button class="btn btn-outline-secondary btn-sm mt-2">
                    Change Avatar
                </button>
            </div>

            <!-- Right Column -->
            <div class="col-md-8">

                <h5 class="mb-3">Account Information</h5>

                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" value="Anas Khan">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" value="anas@email.com">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Enter phone number">
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Joined Date</label>
                        <input type="text" class="form-control" value="Jan 2026" disabled>
                    </div>

                </div>

                <hr class="my-4">

                <h5 class="mb-3">Change Password</h5>

                <div class="row g-3">

                    <div class="col-md-6">
                        <input type="password" class="form-control" placeholder="New Password">
                    </div>

                    <div class="col-md-6">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>

                </div>

                <div class="mt-4">
                    <button class="btn btn-primary">Save Changes</button>
                </div>

            </div>
        </div>

        <!-- Statistics Section -->
        <hr class="my-5">

        <h5 class="mb-4">Your Activity</h5>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="stat-box">
                    <h4>12</h4>
                    <p>Total Attempts</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-box">
                    <h4>8/10</h4>
                    <p>Best Score</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-box">
                    <h4>75%</h4>
                    <p>Average Score</p>
                </div>
            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

</x-user.main>
