<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TrackTogether - Stay Accountable</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background: #0f172a;
    color: white;
    overflow-x: hidden;
}

/* Animated Gradient Background */
body::before {
    content: '';
    position: fixed;
    width: 800px;
    height: 800px;
    background: radial-gradient(circle, #6366f1, transparent 60%);
    top: -200px;
    left: -200px;
    filter: blur(120px);
    opacity: 0.6;
}

body::after {
    content: '';
    position: fixed;
    width: 700px;
    height: 700px;
    background: radial-gradient(circle, #06b6d4, transparent 60%);
    bottom: -200px;
    right: -200px;
    filter: blur(120px);
    opacity: 0.6;
}

.navbar {
    display: flex;
    justify-content: space-between;
    padding: 25px 80px;
    position: relative;
    z-index: 10;
}

.navbar a {
    color: white;
    text-decoration: none;
    font-weight: 600;
}

.btn {
    padding: 10px 20px;
    border-radius: 30px;
    border: none;
    cursor: pointer;
    font-weight: 600;
}

.btn-primary {
    background: linear-gradient(90deg, #6366f1, #06b6d4);
    color: white;
    transition: 0.3s;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 30px rgba(99,102,241,0.5);
}

.hero {
    text-align: center;
    padding: 120px 20px;
    position: relative;
    z-index: 10;
}

.hero h1 {
    font-size: 4rem;
    font-weight: 900;
    background: linear-gradient(to right, #fff, #9ca3af);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero p {
    margin-top: 20px;
    font-size: 1.2rem;
    color: #cbd5e1;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.hero-buttons {
    margin-top: 40px;
}

.hero-buttons .btn {
    margin: 0 10px;
}

/* Glass Cards */
.section {
    padding: 100px 20px;
    text-align: center;
    position: relative;
    z-index: 10;
}

.cards {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-top: 50px;
    flex-wrap: wrap;
}

.card {
    width: 300px;
    padding: 40px 25px;
    border-radius: 20px;
    backdrop-filter: blur(15px);
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    transition: 0.4s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}

.card h3 {
    margin-top: 20px;
    font-size: 1.3rem;
}

.card p {
    margin-top: 15px;
    color: #94a3b8;
}

.footer {
    text-align: center;
    padding: 30px;
    color: #94a3b8;
}

/* Responsive */
@media(max-width:768px){
    .navbar {
        padding: 20px;
    }
    .hero h1 {
        font-size: 2.5rem;
    }
}
</style>
</head>

<body>

<div class="navbar">
    <div><strong>TrackTogether</strong></div>
    <div>
        <a href="#" style="margin-right:20px;">Login</a>
        <button class="btn btn-primary">Get Started</button>
    </div>
</div>

<section class="hero">
    <h1>Stay Accountable.<br>Grow Together.</h1>
    <p>
        A next-generation progress tracking platform designed for teams,
        creators, and builders who want real accountability.
    </p>
    <div class="hero-buttons">
        <button class="btn btn-primary">Create Free Account</button>
        <button class="btn" style="background:rgba(255,255,255,dom);color:white;border:1px solid rgba(255,255,255,0.2);">
            Learn More
        </button>
    </div>
</section>

<section class="section">
    <h2 style="font-size:2.5rem;font-weight:800;">Core Features</h2>

    <div class="cards">
        <div class="card">
            <div style="font-size:40px;">📊</div>
            <h3>Live Progress Board</h3>
            <p>Real-time updates shared across your accountability group.</p>
        </div>

        <div class="card">
            <div style="font-size:40px;">👥</div>
            <h3>Group Motivation</h3>
            <p>Stay consistent by seeing others show up every day.</p>
        </div>

        <div class="card">
            <div style="font-size:40px;">📈</div>
            <h3>Growth Analytics</h3>
            <p>Visual charts that make improvement measurable.</p>
        </div>
    </div>
</section>

<section class="section">
    <h2 style="font-size:2.5rem;font-weight:800;">How It Works</h2>

    <div class="cards">
        <div class="card">
            <h3>1. Join or Create</h3>
            <p>Start a private accountability group.</p>
        </div>
        <div class="card">
            <h3>2. Update Daily</h3>
            <p>Track task completion and share progress.</p>
        </div>
        <div class="card">
            <h3>3. Watch Growth</h3>
            <p>See visual metrics improve over time.</p>
        </div>
    </div>
</section>

<footer class="footer">
    © {{ date('Y') }} TrackTogether. Built for consistency.
</footer>

</body>
</html>
