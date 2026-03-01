<x-dashboard.main>
<!DOCTYPE html>
<html>
<head>
	<title>Analytics - HiStudy Admin</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<style>
		body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #F8FAFF, #EEF2FF); }
		.sidebar { height: 100vh; background: #1E3A8A; padding: 30px 20px; position: fixed; width: 240px; }
		.sidebar h4 { color: #fff; font-weight: 600; }
		.sidebar a { display: block; color: #CBD5E1; padding: 12px; margin-top: 10px; text-decoration: none; border-radius: 8px; transition: 0.3s; }
		.sidebar a:hover, .sidebar a.active { background: #2563EB; color: #fff; }
		.main-content { margin-left: 260px; padding: 40px; }
		.admin-header { background: #fff; padding: 30px; border-radius: 20px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08); margin-bottom: 30px; }
		.stat-card { background: #fff; padding: 25px; border-radius: 15px; box-shadow: 0 10px 40px rgba(0, 0, 0, 0.05); margin-bottom: 30px; }
		.logout-btn { background: rgb(30, 30, 177); padding: 1rem 2rem; margin: 2rem; margin-top: 12rem; border-radius: 1rem; border: none; color: rgb(249, 249, 249); cursor: pointer; font: inherit; }
	</style>
</head>
<body>
	<!-- Main Content -->
	<div class="main-content">
		<div class="admin-header">
			<h3>Analytics Overview</h3>
			<p class="text-muted">Visualize quiz, user, and result statistics.</p>
		</div>
		<div class="row g-4 mb-4">
			<div class="col-md-4">
				<div class="stat-card">
					<h5>Total Quizzes</h5>
					<h3>{{ $totalQuizzes ?? 0 }}</h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="stat-card">
					<h5>Total Users</h5>
					<h3>{{ $totalUsers ?? 0 }}</h3>
				</div>
			</div>
			<div class="col-md-4">
				<div class="stat-card">
					<h5>Total Attempts</h5>
					<h3>{{ $totalAttempts ?? 0 }}</h3>
				</div>
			</div>
		</div>
		<div class="row g-4">
			<div class="col-md-6">
				<div class="stat-card">
					<h5>Quiz Attempts per Quiz</h5>
					<canvas id="quizAttemptsChart"></canvas>
				</div>
			</div>
			<div class="col-md-6">
				<div class="stat-card">
					<h5>User Registrations Over Time</h5>
					<canvas id="userRegistrationsChart"></canvas>
				</div>
			</div>
		</div>
	</div>
	<script>
		// Example data, replace with real data from controller
		const quizAttemptsData = @json($quizAttemptsData ?? []);
		const userRegistrationsData = @json($userRegistrationsData ?? []);
		// Quiz Attempts Chart
		new Chart(document.getElementById('quizAttemptsChart'), {
			type: 'bar',
			data: {
				labels: quizAttemptsData.labels || [],
				datasets: [{
					label: 'Attempts',
					data: quizAttemptsData.data || [],
					backgroundColor: '#2563EB',
				}]
			},
			options: { responsive: true, plugins: { legend: { display: false } } }
		});
		// User Registrations Chart
		new Chart(document.getElementById('userRegistrationsChart'), {
			type: 'line',
			data: {
				labels: userRegistrationsData.labels || [],
				datasets: [{
					label: 'Users',
					data: userRegistrationsData.data || [],
					borderColor: '#1E3A8A',
					backgroundColor: 'rgba(30,58,138,0.1)',
					fill: true,
					tension: 0.4
				}]
			},
			options: { responsive: true, plugins: { legend: { display: false } } }
		});
	</script>
</body>
</html>


</x-dashboard.main>
