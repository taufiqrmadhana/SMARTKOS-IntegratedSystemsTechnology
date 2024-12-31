const apiUrl = "http://localhost:8080/report";

async function fetchWithAuth(url, options = {}) {
    const token = localStorage.getItem('authToken');
    if (!options.headers) {
        options.headers = {};
    }
    options.headers['Authorization'] = `Bearer ${token}`;
    const response = await fetch(url, options);

    if (response.status === 401) {
        alert('Session expired. Please log in again.');
        showLoginPage();
    }

    return response;
}

document.getElementById('createForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(e.target);
    const response = await fetchWithAuth(`${apiUrl}/create`, {
        method: 'POST',
        body: formData,
    });
    const result = await response.json();
    alert(result.message || "Failed to submit report.");
});

document.getElementById('viewReports').addEventListener('click', async () => {
    const response = await fetchWithAuth(apiUrl);
    const reports = await response.json();
    const list = document.getElementById('reportList');
    list.innerHTML = reports.map(report => `
        <div>
            <h3>${report.problem_type}</h3>
            <p><strong>ID:</strong> ${report.id}</p>
            <p><strong>Deskripsi:</strong> ${report.description}</p>
            <p><strong>Nomor kamar:</strong> ${report.room_location}</p>
            <p><strong>Status:</strong> ${report.status}</p>
            <img src="${report.photo_url}" alt="${report.problem_type}" style="width: 100%; max-width: 300px; margin-top: 10px;">
            <button onclick="deleteReport(${report.id})" class="delete-button">Delete</button>
        </div>
    `).join('');
});

// Delete Report
async function deleteReport(id) {
    if (!confirm("Are you sure you want to delete this report?")) return;

    try {
        const response = await fetchWithAuth(`${apiUrl}/delete/${id}`, {
            method: 'DELETE',
        });

        const result = await response.json();
        alert(result.message || "Failed to delete report.");

        // Refresh the list after deletion
        document.getElementById('viewReports').click();
    } catch (error) {
        console.error(error);
        alert("An error occurred while deleting the report.");
    }
}

// Filter Reports by Status
document.getElementById('filterReports').addEventListener('click', async () => {
    const status = document.getElementById('statusFilter').value;

    try {
        const response = await fetchWithAuth(`${apiUrl}/status/${status}`);
                
        if (!response.ok) {
            throw new Error(`Failed to fetch reports with status: ${status}`);
        }

        const reports = await response.json();

        if (reports.length === 0) {
            document.getElementById('filteredReports').innerHTML = `
                <p>No reports found with status: ${status}</p>
            `;
            return;
        }

        const list = document.getElementById('filteredReports');
        list.innerHTML = reports.map(report => `
            <div>
                <h3>${report.problem_type}</h3>
                <p>${report.description}</p>
                <p><strong>Location:</strong> ${report.room_location}</p>
                <p><strong>Status:</strong> ${report.status}</p>
            </div>
        `).join('');
    } catch (error) {
        console.error(error);
        alert(`Error: ${error.message}`);
    }
});

        // Update Report Status
        document.getElementById('updateStatusForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const reportId = document.getElementById('reportId').value;
            const newStatus = document.getElementById('newStatus').value;

            const response = await fetchWithAuth(`${apiUrl}/updateStatus/${reportId}`, {
                method: 'PUT',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ status: newStatus }),
            });

            const result = await response.json();
            alert(result.message || "Failed to update status.");
        });

        // Get Statistics
        document.getElementById('viewStats').addEventListener('click', async () => {
            const response = await fetchWithAuth(`${apiUrl}/stats`);
            const stats = await response.json();
            document.getElementById('stats').innerHTML = `
                <p><strong>Total Reports:</strong> ${stats.total_reports}</p>
                <p><strong>Pending:</strong> ${stats.pending}</p>
                <p><strong>In Process:</strong> ${stats.in_process}</p>
                <p><strong>Completed:</strong> ${stats.completed}</p>
            `;
        });


        document.getElementById('registerForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            // Ambil nilai dari form input
            const username = document.getElementById('regUsername').value;
            const password = document.getElementById('regPassword').value;

            // Validasi panjang password
            if (password.length < 8) {
                alert('Password must be at least 8 characters long.');
                return; // Berhenti jika password terlalu pendek
            }

            try {
                // Kirim request ke endpoint register
                const response = await fetch('http://localhost:8080/auth/register', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ username, password }),
                });

                const result = await response.json();

                if (response.ok) {
                    alert(result.message || 'Registration successful.');
                    document.getElementById('registerForm').reset(); // Reset form setelah sukses
                } else {
                    alert(result.messages?.error || 'Registration failed.');
                }
            } catch (error) {
                console.error('Error during registration:', error);
                alert('An error occurred while registering. Please try again.');
            }
        });

        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const username = document.getElementById('logUsername').value;
            const password = document.getElementById('logPassword').value;

            const response = await fetch('http://localhost:8080/auth/login', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ username, password }),
            });

            const result = await response.json();

            if (response.ok) {
                alert(result.message || 'Login successful.');
                localStorage.setItem('authToken', result.token); 
                showManagementPage(); 
            } else {
                alert(result.messages.error || 'Login failed.');
            }
        });

        document.getElementById('logoutButton').addEventListener('click', () => {
            localStorage.removeItem('authToken'); 
            alert('Logged out successfully.');
            showLoginPage(); 
        });

        // Fungsi untuk memeriksa apakah pengguna sudah login
        function isAuthenticated() {
            return localStorage.getItem('authToken') !== null;
        }

        // Fungsi untuk menampilkan halaman manajemen setelah login berhasil
        function showManagementPage() {
            document.getElementById('registerSection').style.display = 'none';
            document.getElementById('loginSection').style.display = 'none'; 
            document.getElementById('managementSection').style.display = 'block';
        }

        // Fungsi untuk menampilkan halaman login jika pengguna belum login
        function showLoginPage() {
            document.getElementById('registerSection').style.display = 'block';
            document.getElementById('loginSection').style.display = 'block';
            document.getElementById('managementSection').style.display = 'none'; 
        }

        // Periksa status login saat halaman dimuat
        if (isAuthenticated()) {
            showManagementPage();
        } else {
            showLoginPage();
        }

        document.getElementById('logoutButton').addEventListener('click', () => {
            localStorage.removeItem('authToken'); 
            alert('Logged out successfully.');
            showLoginPage(); 
        });