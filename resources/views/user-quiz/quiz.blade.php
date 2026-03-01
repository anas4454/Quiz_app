<x-user.main>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz - HiStudy</title>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background: linear-gradient(135deg, #F8FAFF, #EEF2FF);
            }

            /* Navbar */
            .navbar {
                background: #1E3A8A;
                padding: 18px 0;
            }

            .navbar-brand {
                font-weight: 700;
                font-size: 22px;
                color: #fff !important;
            }

            /* Quiz Container */
            .quiz-wrapper {
                margin-top: 60px;
            }

            .quiz-card {
                background: #fff;
                border-radius: 20px;
                padding: 40px;
                box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            }

            /* Header */
            .quiz-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
            }

            .timer-badge {
                background: #EF4444;
                color: white;
                padding: 8px 18px;
                border-radius: 50px;
                font-weight: 600;
            }

            /* Progress */
            .progress {
                height: 8px;
                border-radius: 20px;
                margin-bottom: 25px;
            }

            /* Question */
            .question-title {
                font-size: 20px;
                font-weight: 600;
                margin-bottom: 20px;
            }

            /* Options */
            .option-card {
                border: 2px solid #E2E8F0;
                padding: 15px 18px;
                border-radius: 12px;
                margin-bottom: 15px;
                cursor: pointer;
                transition: 0.3s;
            }

            .option-card:hover {
                border-color: #2563EB;
                background: #F1F5FF;
            }

            .option-card input {
                margin-right: 10px;
            }

            /* Buttons */
            .quiz-footer {
                display: flex;
                justify-content: space-between;
                margin-top: 30px;
            }

            .btn-primary {
                background: #2563EB;
                border: none;
                padding: 10px 25px;
                border-radius: 8px;
            }

            .btn-outline-secondary {
                border-radius: 8px;
            }
        </style>
    </head>

    <body>


        <!-- QUIZ SECTION -->
        <div class="container quiz-wrapper">

            <div class="quiz-card">
                <form action="{{ route('user-result', $quiz->slug) }}" method="post">
                    @csrf
                    <!-- Header -->
                    <div class="quiz-header">
                        <div>
                            <h4>Frontend Fundamentals Quiz</h4>
                            <small class="text-muted">10 Questions • 10 Minutes</small>
                        </div>
                        <div class="timer-badge">
                            ⏳ <span id="time">60</span>s
                        </div>
                    </div>



                    <!-- Question -->

                    <div>
                        @foreach ($quiz->questions as $question)
                            <div class="question-title" id="questionTitle"></div>
                            <div>
                                <div class="question-title">
                                    {{ $question->question_text }}
                                </div>

                                @foreach ($question->options as $option)
                                    <label class="option-card">
                                        <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option->id }}">
                                        {{ $option->option_text }}
                                    </label>
                                @endforeach

                                {{-- <label class="option-card">
                        <input type="radio" name="q1">
                        High Transfer Machine Language
                    </label>

                    <label class="option-card">
                        <input type="radio" name="q1">
                        Hyperlink Text Management Language
                    </label>

                    <label class="option-card">
                        <input type="radio" name="q1">
                        None of the above
                    </label> --}}
                            </div>
                            <div id="optionsContainer"></div>
                        @endforeach
                    </div>

                    <!-- Footer -->
                    <div class="quiz-footer">
                        <a href="{{ route('user-dashboard') }}"> <button class="btn btn-outline-secondary"
                                id="prevBtn">Previous</button> </a>

                        <button class="btn btn-primary" id="nextBtn">Next</button>
                    </div>

                </form>
            </div>

        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            let time = 60;

            let timer = setInterval(() => {
                if (time > 0) {
                    time--;
                    document.getElementById("time").innerText = time;
                } else {
                    clearInterval(timer);
                    alert("Time's Up! Quiz Submitted.");
                    window.location.href = "dashboard.html";
                }
            }, 1000);


            const quizData = [{
                    question: "What does HTML stand for?",
                    options: [
                        "Hyper Text Markup Language",
                        "High Transfer Machine Language",
                        "Hyperlink Text Management Language",
                        "None of the above"
                    ],
                    answer: 0
                },
                {
                    question: "Which is a JavaScript framework?",
                    options: [
                        "Laravel",
                        "Django",
                        "React",
                        "Flask"
                    ],
                    answer: 2
                },
                {
                    question: "CSS is used for?",
                    options: [
                        "Structuring content",
                        "Styling webpages",
                        "Database management",
                        "Server configuration"
                    ],
                    answer: 1
                }
            ];

            let currentQuestion = 0;

            const questionTitle = document.getElementById("questionTitle");
            const optionsContainer = document.getElementById("optionsContainer");
            const nextBtn = document.getElementById("nextBtn");
            const prevBtn = document.getElementById("prevBtn");
            const progressBar = document.querySelector(".progress-bar");

            function loadQuestion() {
                const question = quizData[currentQuestion];

                questionTitle.innerText =
                    (currentQuestion + 1) + ". " + question.question;

                optionsContainer.innerHTML = "";

                question.options.forEach((option, index) => {
                    optionsContainer.innerHTML += `
            <label class="option-card">
                <input type="radio" name="option" value="${index}">
                ${option}
            </label>
        `;
                });

                updateProgress();
            }

            function updateProgress() {
                let progressPercent =
                    ((currentQuestion + 1) / quizData.length) * 100;

                progressBar.style.width = progressPercent + "%";
            }

            nextBtn.addEventListener("click", () => {
                if (currentQuestion < quizData.length - 1) {
                    currentQuestion++;
                    loadQuestion();
                } else {
                    window.location.href = "result.html";
                }
            });

            prevBtn.addEventListener("click", () => {
                if (currentQuestion > 0) {
                    currentQuestion--;
                    loadQuestion();
                }
            });

            // Timer
            let time = 60;
            let timer = setInterval(() => {
                if (time > 0) {
                    time--;
                    document.getElementById("time").innerText = time;
                } else {
                    clearInterval(timer);
                    window.location.href = "result.html";
                }
            }, 1000);

            // Initial load
            loadQuestion();
        </script>

    </body>

    </html>

</x-user.main>
