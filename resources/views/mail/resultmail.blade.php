<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
</head>
<body>

    <h2>Hello {{ auth()->user()->name }} 👋</h2>

    <p>Your quiz has been completed successfully.</p>

    <h3>Your Score: {{ $score }} / {{ $total }}</h3>

    <p>Keep learning and improving 🚀</p>

</body>
</html>
