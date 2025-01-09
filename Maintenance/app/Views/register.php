<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SmartKos</title>
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
        <h2 class="text-center mb-4">Register for SmartKos</h2>
        <div id="error-message" class="alert alert-danger d-none"></div>

        <form id="register-form">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Choose a username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required>
            </div>
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" placeholder="Re-enter your password" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
    </div>

    <script>
        document.getElementById('register-form').addEventListener('submit', async (event) => {
            event.preventDefault();

            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);

            if (data.password !== document.getElementById('confirm_password').value) {
                document.getElementById('error-message').textContent = 'Passwords do not match!';
                document.getElementById('error-message').classList.remove('d-none');
                return;
            }

            try {
                const response = await fetch('/auth/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '<?= csrf_hash(); ?>'
                    },
                    body: JSON.stringify(data)
                });

                const result = await response.json();

                if (response.ok) {
                    window.location.href = '/login'; // Redirect ke halaman login setelah sukses
                } else {
                    document.getElementById('error-message').textContent = result.error || 'Registration failed!';
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
