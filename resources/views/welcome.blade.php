<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrackTogether - Stay Accountable</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .hero {
            background: linear-gradient(135deg, #4e73df, #1cc88a);
            color: white;
            padding: 100px 0;
        }
        .feature-icon {
            font-size: 40px;
            color: #4e73df;
        }
        .cta-section {
            background: #f8f9fc;
            padding: 80px 0;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">TrackTogether</a>

        <div class="ms-auto">
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
            <a href="{{ route('register') }}" class="btn btn-primary">Get Started</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Stay Accountable. Grow Together.</h1>
        <p class="lead mt-3">
            TrackTogether helps individuals and teams stay consistent by sharing progress, updating task status, and collaborating on live task boards.
        </p>
        <div class="mt-4">
            <a href="{{ route('register') }}" class="btn btn-light btn-lg me-3">Create Free Account</a>
            <a href="#features" class="btn btn-outline-light btn-lg">Learn More</a>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Core Features</h2>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded">
                    <div class="feature-icon mb-3">📊</div>
                    <h5>Shared Progress Board</h5>
                    <p>View and update tasks in real-time with your group members.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded">
                    <div class="feature-icon mb-3">👥</div>
                    <h5>Group Accountability</h5>
                    <p>Stay motivated by seeing everyone’s consistency and updates.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="p-4 shadow-sm rounded">
                    <div class="feature-icon mb-3">📈</div>
                    <h5>Progress Analytics</h5>
                    <p>Track completion rates and performance with visual insights.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">How It Works</h2>

        <div class="row">
            <div class="col-md-4">
                <h5>1️⃣ Create or Join a Group</h5>
                <p>Start your accountability journey by joining like-minded members.</p>
            </div>
            <div class="col-md-4">
                <h5>2️⃣ Update Task Progress</h5>
                <p>Mark tasks as completed and share daily progress updates.</p>
            </div>
            <div class="col-md-4">
                <h5>3️⃣ Visualize Growth</h5>
                <p>See real-time charts and progress tracking on shared boards.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call To Action -->
<section class="cta-section text-center">
    <div class="container">
        <h2 class="fw-bold">Ready to stay consistent?</h2>
        <p class="mt-3">Create your first accountability group today.</p>
        <a href="{{ route('register') }}" class="btn btn-primary btn-lg mt-3">
            Create Your First Group
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <p class="mb-0">© {{ date('Y') }} TrackTogether. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
