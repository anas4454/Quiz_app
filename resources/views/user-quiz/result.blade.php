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

/* Card Design */
.result-container{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
}

.result-card{
    background:#ffffff;
    border-radius:25px;
    padding:60px;
    width:100%;
    max-width:700px;
    box-shadow:0 30px 80px rgba(0,0,0,0.08);
    position:relative;
    overflow:hidden;
}

/* Decorative Background */
.result-card::before{
    content:'';
    position:absolute;
    top:-50px;
    right:-50px;
    width:200px;
    height:200px;
    background:linear-gradient(135deg,#2563EB,#4F46E5);
    border-radius:50%;
    opacity:0.1;
}

/* Score Circle */
.score-circle{
    width:160px;
    height:160px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:36px;
    font-weight:700;
    margin:30px auto;
    background:linear-gradient(135deg,#2563EB,#4F46E5);
    color:#fff;
    box-shadow:0 15px 40px rgba(37,99,235,0.3);
}

/* Result Badge */
.result-badge{
    display:inline-block;
    padding:8px 20px;
    border-radius:30px;
    font-weight:500;
    font-size:14px;
}

/* Buttons */
.btn-primary{
    background:#2563EB;
    border:none;
    padding:12px 30px;
    border-radius:10px;
    font-weight:500;
}

.btn-outline-secondary{
    padding:12px 30px;
    border-radius:10px;
}
</style>
</head>
<body>

<div class="container result-container">
    <div class="result-card text-center">

        <h2 class="fw-bold mb-2">Quiz Completed 🎉</h2>
        <p class="text-muted">Here is your performance summary</p>

        <!-- Score Circle -->
        <div class="score-circle">
            {{ $score }} / {{ $totalQuestion }}
        </div>

        <!-- Percentage -->
        {{-- <h4 class="fw-semibold">{{ $percentage }}%</h4> --}}

        <!-- Result Status (You can control this using Blade condition) -->


        {{-- @if($percentage >= 80)
            <span class="result-badge bg-success-subtle text-success">
                Excellent Performance
            </span>
        @elseif($percentage >= 50)
            <span class="result-badge bg-warning-subtle text-warning">
                Good Job – Keep Improving
            </span>
        @else
            <span class="result-badge bg-danger-subtle text-danger">
                Needs Improvement
            </span>
        @endif --}}

        <!-- Extra Stats -->

        {{-- <div class="row mt-5 text-center">
            <div class="col-md-4">
                <h6 class="text-muted">Total Questions</h6>
                <h5 class="fw-bold">{{ $total }}</h5>
            </div>
            <div class="col-md-4">
                <h6 class="text-muted">Correct Answers</h6>
                <h5 class="fw-bold text-success">{{ $score }}</h5>
            </div>
            <div class="col-md-4">
                <h6 class="text-muted">Wrong Answers</h6>
                <h5 class="fw-bold text-danger">{{ $total - $score }}</h5>
            </div>
        </div> --}}

        <!-- Buttons -->
        <div class="mt-5">
            <a href="{{ route('user-dashboard') }}" class="btn btn-primary me-3">
                Back to Dashboard
            </a>
            {{-- <a href="{{ route('quiz.retake') }}" class="btn btn-outline-secondary">
                Retake Quiz
            </a> --}}
        </div>

    </div>
</div>

</body>
</html>
</x-user.main>
