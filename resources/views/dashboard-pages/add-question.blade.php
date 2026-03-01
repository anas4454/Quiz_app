<x-dashboard.main>

<!DOCTYPE html>
<html>
<head>
    <title>Add Question - HiStudy Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <h3>Add Question</h3>
        </div>
        <div class="stat-card">
            <form method="POST" action="{{ route('admin.dashboard.question-add')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Select Quiz</label>
                    <select name="quiz_id" class="form-control" required>
                        <option value="">Select Quiz</option>
                        @foreach($quizzes as $quiz)
                            <option value="{{ $quiz->id }}">{{ $quiz->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Question</label>
                    <textarea name="question_text" class="form-control" placeholder="Enter Question" required></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Options</label>
                    <input type="text" name="options[]" class="form-control mb-2" placeholder="Option 1" required>
                    <input type="text" name="options[]" class="form-control mb-2" placeholder="Option 2" required>
                    <input type="text" name="options[]" class="form-control mb-2" placeholder="Option 3" required>
                    <input type="text" name="options[]" class="form-control mb-2" placeholder="Option 4" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Correct Answer</label>
                    <select name="correct_answer" class="form-control" required>
                        <option value="">Select Correct Answer</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                        <option value="4">Option 4</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add Question</button>
            </form>
        </div>
    </div>
</body>
</html>


</x-dashboard.main>
