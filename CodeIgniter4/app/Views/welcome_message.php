<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SmartKos - Connecting Tenants and Owners</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body, html {
      margin: 0; padding: 0;
      width: 100%; height: 100%;
      scroll-behavior: smooth;
    }
    header {
      background-color: #343a40;
    }
    .navbar-brand img {
      height: 50px; width: 50px;
      object-fit: cover;
      border-radius: 50%; margin-right: 10px;
      background-color: white; padding: 5px;
    }
    .hero {
      background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
                  url('pexels-kindelmedia-7578975.jpg') center/cover no-repeat;
      height: 425px; color: white;
      display: flex; flex-direction: column;
      justify-content: center; align-items: center;
      text-align: center; position: relative;
    }
    .hero h1 { font-size: 3.5rem; margin-bottom: 1rem; text-shadow: 0 3px 6px rgba(0,0,0,0.7); }
    .hero p { font-size: 1.5rem; text-shadow: 0 2px 5px rgba(0,0,0,0.6); }
    .features { padding: 4rem 2rem; background-color: #f8f9fa; }
    .features h2 { margin-bottom: 2rem; text-align: center; }
    .features .card {
      margin: 1rem; border: none;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }
    .features .card:hover { transform: translateY(-5px); }
    footer { background-color: #343a40; color: white; padding: 1rem 0; text-align: center; }
  </style>
</head>
<body>
  <!-- Header with responsive navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark container">
      <a class="navbar-brand d-flex align-items-center" href="/">
        <img src="Screenshot_2025-01-07_at_15.23.22-removebg-preview.png" alt="SmartKos Logo" />
        <span>SmartKos</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navMenu">
        <div class="navbar-nav">
          <a href="/login" class="btn btn-outline-light me-2">Login</a>
          <a href="/register" class="btn btn-light">Register</a>
        </div>
      </div>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <h1>Welcome to SmartKos</h1>
    <p>Connecting tenants and owners for a smarter living experience.</p>
  </section>

  <!-- Features Section -->
  <section class="features container">
    <h2>Why Choose SmartKos?</h2>
    <div class="row justify-content-center">
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card p-4 text-center w-100">
          <h3>Convenience</h3>
          <p>Manage all your rental needs in one place with ease.</p>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card p-4 text-center w-100">
          <h3>Reliability</h3>
          <p>Get timely responses and transparent communication.</p>
        </div>
      </div>
      <div class="col-md-4 d-flex align-items-stretch">
        <div class="card p-4 text-center w-100">
          <h3>Efficiency</h3>
          <p>Schedule maintenance and resolve issues seamlessly.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 SmartKos. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
