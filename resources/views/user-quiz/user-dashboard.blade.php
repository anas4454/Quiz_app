<x-user.main>


    <div class="container mt-5">

        <h2 class="mb-4">Welcome Back, {{auth()::user()->name  }} 👋</h2>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <h6>Total Attempts</h6>
                    <h3>12</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <h6>Best Score</h6>
                    <h3 class="text-success">9/10</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <h6>Average Score</h6>
                    <h3>7.5</h3>
                </div>
            </div>
        </div>

        <div class="card card-custom mt-5 p-4">
            <h4 class="mb-4">Available Quizzes</h4>

            <div class="row g-4">

                <!-- Quiz 1 -->

                    @if ($quiz->isNotEmpty())

                        @foreach ($quiz as $item)
                            <div class="col-md-6">
                                <div class="quiz-card p-4">
                                    <h5>{{ $item->title }}</h5>
                                    <p class="text-muted">{{ $item->question }} Questions • {{ $item->minutes }} Minutes
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span
                                            class="badge text-dark @if ($item->stage == 'basic') bg-primary @elseif ($item->stage == 'intermediate') bg-warning  @elseif ($item->stage == 'popular') bg-success  @elseif ($item->stage == 'advanced') bg-danger @endif ">{{ $item->stage }}</span>
                                        <a href="{{ route('user-quiz-start' , $item->slug) }}" class="btn btn-sm btn-primary">Start</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endif



                {{-- <!-- Quiz 2 -->
                <div class="col-md-6">
                    <div class="quiz-card p-4">
                        <h5>JavaScript Advanced</h5>
                        <p class="text-muted">15 Questions • 15 Minutes</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-warning text-dark">Intermediate</span>
                            <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Start</a>
                        </div>
                    </div>
                </div>

                <!-- Quiz 3 -->
                <div class="col-md-6">
                    <div class="quiz-card p-4">
                        <h5>React Fundamentals</h5>
                        <p class="text-muted">20 Questions • 20 Minutes</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-success">Popular</span>
                            <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Start</a>
                        </div>
                    </div>
                </div>

                <!-- Quiz 4 -->
                <div class="col-md-6">
                    <div class="quiz-card p-4">
                        <h5>PHP & MySQL</h5>
                        <p class="text-muted">12 Questions • 12 Minutes</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="badge bg-danger">Advanced</span>
                            <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Start</a>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>

    </div>

</x-user.main>
