<x-user.main>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz Result - HiStudy</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    background: linear-gradient(135deg,#F8FAFF,#EEF2FF);
}

.navbar{
    background:#1E3A8A;
    padding:18px 0;
}

.navbar-brand{
    font-weight:700;
    font-size:22px;
    color:#fff !important;
}

.result-wrapper{
    margin-top:80px;
}

.result-card{
    background:#fff;
    border-radius:20px;
    padding:50px;
    box-shadow:0 20px 60px rgba(0,0,0,0.08);
    text-align:center;
}

.score-circle{
    width:140px;
    height:140px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:32px;
    font-weight:700;
    margin:20px auto;
}

.btn-primary{
    background:#2563EB;
    border:none;
    padding:10px 25px;
    border-radius:8px;
}
</style>
</head>
<body>

<div class="container result-wrapper">
    <div class="result-card">

        <h3>Quiz Completed 🎉</h3>

        <div id="scoreCircle" class="score-circle"></div>

        <h5 id="resultText"></h5>
        <p class="text-muted mt-2" id="percentageText"></p>

        <div class="mt-4">
            <a href="dashboard.html" class="btn btn-primary me-3">Back to Dashboard</a>
            <a href="quiz.html" class="btn btn-outline-secondary">Retake Quiz</a>
        </div>

    </div>
</div>

<script>
let score = parseInt(localStorage.getItem("score")) || 0;
let total = parseInt(localStorage.getItem("total")) || 0;

let percentage = total ? Math.round((score / total) * 100) : 0;

let circle = document.getElementById("scoreCircle");
let resultText = document.getElementById("resultText");
let percentageText = document.getElementById("percentageText");

circle.innerText = score + " / " + total;

if (percentage >= 80) {
    circle.style.background = "#DCFCE7";
    circle.style.color = "#16A34A";
    resultText.innerText = "Excellent Performance!";
}
else if (percentage >= 50) {
    circle.style.background = "#FEF9C3";
    circle.style.color = "#CA8A04";
    resultText.innerText = "Good Job! Keep Improving.";
}
else {
    circle.style.background = "#FEE2E2";
    circle.style.color = "#DC2626";
    resultText.innerText = "Needs Improvement. Try Again!";
}

percentageText.innerText = "You scored " + percentage + "%";
</script>

</body>
</html>


</x-user.main>
