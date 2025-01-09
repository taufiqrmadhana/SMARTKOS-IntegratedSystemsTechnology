<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SmartKos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .form-container {
            background-color: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Login to SmartKos</h2>
        <div id="error-message" class="alert alert-danger d-none"></div>

        <form id="login-form">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <p class="text-center mt-3">
                Don't have an account? <a href="/register">Register</a>
            </p>
        </form>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', async (event) => {
            event.preventDefault();

            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);

            try {
                const response = await fetch('/auth/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?= csrf_hash(); ?>' // Tambahkan CSRF token jika diperlukan
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok) {
                    // Redirect or show success
                    window.location.href = '/dashboard'; // Ganti dengan halaman setelah login
                } else {
                    // Show error message
                    document.getElementById('error-message').textContent = result.message || 'Login failed!';
                    document.getElementById('error-message').classList.remove('d-none');
                }
            } catch (error) {
                document.getElementById('error-message').textContent = 'An unexpected error occurred!';
                document.getElementById('error-message').classList.remove('d-none');
            }
        });
    </script>
</body>
</html>
