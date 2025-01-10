<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SmartKos Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
    body, html {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background-color: #f4f7f6;
      color: #333;
      display: flex;
      flex-direction: column;
    }

    header {
      background: #2c3e50;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .navbar {
      padding: 0.5rem 1rem;
    }

    .navbar-brand {
      font-weight: 700;
      color: #fff !important;
      display: flex;
      align-items: center;
    }

    .navbar-brand img {
      height: 40px;
      margin-right: 0.5rem;
      object-fit: contain;
      background-color: #fff;
      padding: 5px;
      border-radius: 50%;
    }

    .btn-logout {
      border: 1px solid #e74c3c;
      color: #fff;
      background: #e74c3c;
      transition: all 0.3s ease;
    }

    .btn-logout:hover {
      background: #c0392b;
      border-color: #c0392b;
    }

    footer {
      background-color: #2c3e50;
      color: #fff;
      text-align: center;
      padding: 0.5rem 0;
      flex-shrink: 0;
    }

    .content-area {
      flex: 1 0 auto;
      padding: 2rem 1rem;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.06);
      background-color: #fff;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.1);
    }

    .card-header {
      background: #3498db;
      color: #fff;
      border-radius: 10px 10px 0 0;
      padding: 1rem;
      text-transform: uppercase;
      font-size: 0.9rem;
      letter-spacing: 1px;
    }

    .card-body {
      padding: 1.5rem;
    }

    .list-group-item {
      border: none;
      border-bottom: 1px solid #e0e0e0;
      padding: 1rem;
      background-color: #fff;
      transition: background-color 0.3s ease;
    }

    .list-group-item:hover {
      background-color: #f5f5f5;
    }

    .list-group-item:last-child {
      border-bottom: none;
    }

    select.form-select, input.form-control, textarea.form-control {
      border-radius: 5px;
      border: 1px solid #ced4da;
      background-color: #f8f9fa;
      color: #333;
    }

    select.form-select:focus, input.form-control:focus, textarea.form-control:focus {
      box-shadow: 0 0 0 0.2rem rgba(52, 152, 219, 0.25);
      border-color: #3498db;
    }

    .modal-body .form-control {
      color: #333;
    }

    .btn-primary {
      background-color: #3498db;
      border-color: #3498db;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #2980b9;
      border-color: #2980b9;
    }

    @media (max-width: 767.98px) {
      .navbar-brand img {
        height: 30px;
        margin-right: 0.3rem;
      }
      .btn-logout {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
      }
      .navbar .ms-auto {
        width: 100%;
        display: flex;
        justify-content: center;
        margin-top: 0.5rem;
      }
      .card-header h5 {
        font-size: 0.9rem;
      }
      .card-body {
        padding: 1rem;
      }
      .list-group-item {
        padding: 0.5rem;
      }
      .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
      }
    }

    .report-item {
      border-bottom: 1px solid #e0e0e0;
      padding: 1rem;
      margin-bottom: 0.5rem;
      background-color: #f8f9fa;
      border-radius: 5px;
    }

    .report-item:last-child {
      border-bottom: none;
    }

    .report-item h6 {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
    }

    .report-item p {
      margin: 0.25rem 0;
      color: #7f8c8d;
    }

    .badge-status {
      font-size: 0.9rem;
      padding: 0.35em 0.65em;
      color: #fff;
      border-radius: 10px;
    }

    #toast-container {
      z-index: 11;
    }

    .stat-item {
      background: #ecf0f1;
      border-radius: 5px;
      padding: 1rem;
      text-align: center;
      transition: background 0.3s ease;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .stat-item:hover {
      background: #d6dbdf;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 1rem;
    }

    .delete-button {
      background-color: #e74c3c;
      color: white;
      border: none;
      padding: 5px 10px;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }

    .delete-button:hover {
      background-color: #c0392b;
    }

    /* Styling for View All Reports */
    .report-container {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: space-around;
    }

    .report-card {
      width: calc(33.333% - 1rem);
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      border-radius: 8px;
      padding: 1rem;
      background: #fff;
      transition: all 0.3s ease;
    }

    .report-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .report-card img {
      max-width: 100%;
      border-radius: 5px;
      margin-top: 0.5rem;
    }

    @media (max-width: 991.98px) {
      .report-card {
        width: calc(50% - 1rem);
      }
    }

    @media (max-width: 575.98px) {
      .report-card {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid px-4">
        <a class="navbar-brand" href="#">
          <img src="<?php echo base_url('Screenshot_2025-01-07_at_15.23.22-removebg-preview.png'); ?>" alt="Logo" />
          SmartKos Dashboard
        </a>
        <div class="ms-auto">
          <button class="btn btn-logout" onclick="logout()">Logout</button>
        </div>
      </div>
    </nav>
  </header>

  <div class="content-area container-fluid">
    <div class="row">
      <!-- Report Stats -->
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Report Statistics</h5>
          </div>
          <div class="card-body stats-grid" id="stats">
            <!-- Stats will be dynamically added here -->
          </div>
        </div>
      </div>

      <!-- Report Management -->
      <div class="col-12 mb-4">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Report Management</h5>
          </div>
          <div class="card-body">
            <div class="mb-3 d-flex flex-wrap">
              <button id="viewReports" class="btn btn-primary me-2 mb-2">View All Reports</button>
              <label for="statusFilter" class="form-label me-2 mb-2">Filter by Status:</label>
              <select id="statusFilter" class="form-select d-inline-block w-auto me-2 mb-2">
                <option value="all">All</option>
                <option value="pending">Pending</option>
                <option value="scheduled">Scheduled</option>
                <option value="completed">Completed</option>
              </select>
              <button id="filterReports" class="btn btn-outline-secondary mb-2">Filter Reports</button>
            </div>
            <div id="reportList" class="report-container"></div>
            <div id="filteredReports"></div>
          </div>
        </div>
      </div>

      <!-- Existing Content: Submit Form, Maintenance Reports, Statistics -->
      <div class="row">
        <!-- Submit Form -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-header">
              <h5 class="mb-0">Maintenance Scheduling</h5>
            </div>
            <div class="card-body">
              <form id="submit-form">
                <div class="mb-3">
                  <label for="type" class="form-label">Type</label>
                  <input type="text" id="type" class="form-control" placeholder="e.g., Plumbing" required />
                </div>
                <div class="mb-3">
                  <label for="facility" class="form-label">Facility</label>
                  <input type="text" id="facility" class="form-control" placeholder="e.g., Room 101" required />
                </div>
                <div class="mb-3">
                  <label for="scheduled-date" class="form-label">Scheduled Date</label>
                  <input type="date" id="scheduled-date" class="form-control" required />
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea id="description" class="form-control" rows="3" placeholder="Describe the issue" required></textarea>
                </div>
                <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  <select id="status" class="form-select" required>
                    <option value="pending" selected>Pending</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="completed">Completed</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
              </form>
            </div>
          </div>
        </div>

        <!-- Maintenance Reports -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="card-header">
              <h5 class="mb-0">Maintenance Schedules</h5>
            </div>
            <ul id="reports-list" class="list-group list-group-flush"></ul>
          </div>
        </div>

        <!-- Statistics -->
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card h-100">
            <div class="card-header">
              <h5 class="mb-0">Maintenance Statistics</h5>
            </div>
            <div class="card-body" id="maintenance-stats">
              <!-- Existing statistics will be here -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Update Modal -->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Update Maintenance Schedule</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="update-form">
              <input type="hidden" id="update-id" />
              <div class="mb-3">
                <label for="update-type" class="form-label">Type</label>
                <input type="text" id="update-type" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="update-facility" class="form-label">Facility</label>
                <input type="text" id="update-facility" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="update-scheduled-date" class="form-label">Scheduled Date</label>
                <input type="date" id="update-scheduled-date" class="form-control" required />
              </div>
              <div class="mb-3">
                <label for="update-description" class="form-label">Description</label>
                <textarea id="update-description" class="form-control" rows="3" required></textarea>
              </div>
              <div class="mb-3">
                <label for="update-status" class="form-label">Status</label>
                <select id="update-status" class="form-select" required>
                  <option value="pending">Pending</option>
                  <option value="scheduled">Scheduled</option>
                  <option value="completed">Completed</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <p>© 2025 SmartKos. All rights reserved.</p>
    </footer>

    <!-- Toast Container -->
    <div id="toast-container" aria-live="polite" aria-atomic="true" class="position-fixed bottom-0 end-0 p-3"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const baseUrl = "https://blue-alpaca-681720.hostingersite.com";
    const apiUrl = "https://cornflowerblue-wolverine-266402.hostingersite.com/report";

    document.addEventListener("DOMContentLoaded", () => {
      fetchReports();
      fetchStats();
      fetchReportStats(); // Fetch report stats immediately without button click
    });

    function showToast(message, type = 'success') {
      const toastContainer = document.getElementById('toast-container');
      const toast = document.createElement('div');
      toast.className = 'toast';
      toast.setAttribute('role', 'alert');
      toast.setAttribute('aria-live', 'assertive');
      toast.setAttribute('aria-atomic', 'true');
      toast.dataset.bsDelay = 5000;
      
      let headerBg = 'bg-success';
      if (type === 'error') headerBg = 'bg-danger';
      else if (type === 'info') headerBg = 'bg-info';
      else if (type === 'warning') headerBg = 'bg-warning';
      
      toast.innerHTML = `
        <div class="toast-header ${headerBg} text-white">
          <strong class="me-auto">Notification</strong>
          <small>Just now</small>
          <button type="button" class="btn-close btn-close-white ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          ${message}
        </div>
      `;
      
      toastContainer.appendChild(toast);
      const bsToast = new bootstrap.Toast(toast);
      bsToast.show();
      
      toast.addEventListener('hidden.bs.toast', () => {
        toast.remove();
      });
    }

    async function fetchReports() {
      try {
        const response = await fetch(`${baseUrl}/maintenance`);
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json();
        const reportsList = document.getElementById("reports-list");
        reportsList.innerHTML = "";

        if (data.length === 0) {
          reportsList.innerHTML = "<li class='list-group-item'>No maintenance reports available.</li>";
          return;
        }

        data.forEach((report) => {
          let statusClass = 'bg-secondary';
          switch(report.status.toLowerCase()) {
            case 'pending':
              statusClass = 'bg-warning';
              break;
            case 'scheduled':
              statusClass = 'bg-info';
              break;
            case 'completed':
              statusClass = 'bg-success';
              break;
          }

          const li = document.createElement("li");
          li.className = "list-group-item report-item";

          li.innerHTML = `
            <div>
              <h6>
                <strong>${sanitizeHTML(report.maintenance_type)}</strong>
                <span class="badge badge-status ${statusClass}">${sanitizeHTML(report.status)}</span>
              </h6>
              <p><strong>Facility:</strong> ${sanitizeHTML(report.facility)}</p>
              <p><strong>Scheduled:</strong> ${sanitizeHTML(report.scheduled_date)}</p>
              <p><strong>Description:</strong> ${sanitizeHTML(report.description)}</p>
            </div>
            <div class="mt-2">
              <button class="btn btn-sm btn-dark me-1" onclick="openUpdateModal(${report.id}, 
                '${sanitizeAttribute(report.maintenance_type)}', 
                '${sanitizeAttribute(report.facility)}', 
                '${sanitizeAttribute(report.scheduled_date)}', 
                '${sanitizeAttribute(report.description)}', 
                '${sanitizeAttribute(report.status)}')">
                Edit
              </button>
              <button class="btn btn-sm btn-outline-dark" onclick="deleteReport(${report.id})">
                Delete
              </button>
            </div>
          `;
          reportsList.appendChild(li);
        });
      } catch (error) {
        console.error('Error fetching reports:', error);
        const reportsList = document.getElementById("reports-list");
        reportsList.innerHTML = "<li class='list-group-item text-danger'>Failed to load maintenance reports.</li>";
      }
    }

    async function fetchStats() {
      try {
        const response = await fetch(`${baseUrl}/maintenance/stats`);
        if (!response.ok) throw new Error('Network response was not ok');
        const data = await response.json();
        const statsDiv = document.getElementById("maintenance-stats");
        statsDiv.innerHTML = `
          <p><strong>Total Requests:</strong> ${sanitizeHTML(data.total_schedules)}</p>
          <p><strong>Pending:</strong> ${sanitizeHTML(data.pending)}</p>
          <p><strong>Scheduled:</strong> ${sanitizeHTML(data.scheduled)}</p>
          <p><strong>Completed:</strong> ${sanitizeHTML(data.completed)}</p>
        `;
      } catch (error) {
        console.error('Error fetching stats:', error);
        const statsDiv = document.getElementById("maintenance-stats");
        statsDiv.innerHTML = "<p class='text-danger'>Failed to load statistics.</p>";
      }
    }


    document.getElementById("submit-form").addEventListener("submit", async (e) => {
      e.preventDefault();
      const data = {
        maintenance_type: document.getElementById("type").value.trim(),
        facility: document.getElementById("facility").value.trim(),
        scheduled_date: document.getElementById("scheduled-date").value,
        description: document.getElementById("description").value.trim(),
        status: document.getElementById("status").value
      };

      try {
        const response = await fetch(`${baseUrl}/maintenance/create`, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data)
        });

        if (response.ok) {
          showToast("Maintenance request submitted successfully!", "success");
          fetchReports();
          fetchStats();
          e.target.reset();
        } else {
          const errorData = await response.json();
          showToast(`Error: ${errorData.message || 'Failed to submit maintenance request.'}`, "error");
        }
      } catch (error) {
        console.error('Error submitting form:', error);
        showToast('An error occurred while submitting the form.', "error");
      }
    });

    function openUpdateModal(id, type, facility, date, description, status) {
      document.getElementById("update-id").value = id;
      document.getElementById("update-type").value = type;
      document.getElementById("update-facility").value = facility;
      document.getElementById("update-scheduled-date").value = date;
      document.getElementById("update-description").value = description;
      document.getElementById("update-status").value = status;

      const modal = new bootstrap.Modal(document.getElementById("updateModal"));
      modal.show();
    }

    document.getElementById("update-form").addEventListener("submit", async (e) => {
      e.preventDefault();
      const id = document.getElementById("update-id").value;
      const data = {
        maintenance_type: document.getElementById("update-type").value.trim(),
        facility: document.getElementById("update-facility").value.trim(),
        scheduled_date: document.getElementById("update-scheduled-date").value,
        description: document.getElementById("update-description").value.trim(),
        status: document.getElementById("update-status").value
      };

      try {
        const response = await fetch(`${baseUrl}/maintenance/update/${id}`, {
          method: "PUT",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data)
        });

        if (response.ok) {
          showToast("Maintenance request updated successfully!", "success");
          fetchReports();
          fetchStats();
          const modal = bootstrap.Modal.getInstance(document.getElementById("updateModal"));
          modal.hide();
        } else {
          const errorData = await response.json();
          showToast(`Error: ${errorData.message || 'Failed to update maintenance request.'}`, "error");
        }
      } catch (error) {
        console.error('Error updating form:', error);
        showToast('An error occurred while updating the form.', "error");
      }
    });

    async function deleteReport(id) {
      if (!confirm('Are you sure you want to delete this report?')) return;

      try {
        const response = await fetch(`${baseUrl}/maintenance/delete/${id}`, { method: "DELETE" });
        if (response.ok) {
          showToast("Maintenance report deleted successfully!", "success");
          fetchReports();
          fetchStats();
        } else {
          const errorData = await response.json();
          showToast(`Error: ${errorData.message || 'Failed to delete maintenance report.'}`, "error");
        }
      } catch (error) {
        console.error('Error deleting report:', error);
        showToast('An error occurred while deleting the report.', "error");
      }
    }

    function logout() {
      fetch(`${baseUrl}/auth/logout`, {
        method: 'POST',
        headers: { "Content-Type": "application/json" }
      })
        .then(response => response.json())
        .then(result => {
          if (result.redirect) {
            showToast("Logout successful!", "info");
            setTimeout(() => {
              window.location.href = result.redirect; // Redirect setelah logout
            }, 1500);
          }
        })
        .catch(error => {
          console.error('Error during logout:', error);
          showToast('An error occurred during logout.', "error");
        });
    }

    function sanitizeHTML(str) {
      const temp = document.createElement('div');
      temp.textContent = str;
      return temp.innerHTML;
    }

    function sanitizeAttribute(str) {
      return str.replace(/'/g, "\\'");
    }

    async function fetchWithAuth(url, options = {}) {
      const token = localStorage.getItem('token'); // Assuming token is stored here
      const headers = { 'Authorization': `Bearer ${token}` };
      if (options.headers) {
        Object.assign(headers, options.headers);
      }
      return fetch(url, { ...options, headers });
    }

    document.getElementById('viewReports').addEventListener('click', async () => {
      try {
        const response = await fetchWithAuth(apiUrl);
        if (!response.ok) throw new Error('Network response was not ok');
        const reports = await response.json();

        const list = document.getElementById('reportList');
        list.innerHTML = '';

        if (reports.length === 0) {
          list.innerHTML = "<div class='report-card text-center'>No reports available.</div>";
        } else {
          list.innerHTML = reports.map(report => `
            <div class="report-card">
              <h3>${report.problem_type}</h3>
              <p><strong>Report ID:</strong> ${report.id}</p>
              <p><strong>Reported by:</strong> ${report.username}</p>
              <p><strong>Description:</strong> ${report.description}</p>
              <p><strong>Room Location:</strong> ${report.room_location}</p>
              <p><strong>Status:</strong> ${report.status}</p>
              <img src="${report.photo_url}" alt="${report.problem_type}" />
              <button onclick="deleteReport(${report.id})" class="delete-button">Delete</button>
            </div>
          `).join('');
        }
      } catch (error) {
        console.error('Error fetching reports:', error);
        showToast('An error occurred while fetching reports.', 'error');
      }
    });

    async function fetchReportStats() {
      try {
        const response = await fetchWithAuth(`${apiUrl}/stats`);
        if (!response.ok) throw new Error('Network response was not ok');
        const stats = await response.json();
        const statsDiv = document.getElementById('stats');
        statsDiv.innerHTML = `
          <div class="stat-item"><p><strong>Total Reports:</strong> ${stats.total_reports}</p></div>
          <div class="stat-item"><p><strong>Pending:</strong> ${stats.pending}</p></div>
          <div class="stat-item"><p><strong>In Process:</strong> ${stats.in_process}</p></div>
          <div class="stat-item"><p><strong>Completed:</strong> ${stats.completed}</p></div>
        `;
      } catch (error) {
        console.error('Error fetching report stats:', error);
        document.getElementById('stats').innerHTML = "<p class='text-danger'>Failed to load report statistics.</p>";
      }
    }

    document.getElementById('filterReports').addEventListener('click', async () => {
      const status = document.getElementById('statusFilter').value;
      const url = status === 'all' ? apiUrl : `${apiUrl}/status/${status}`;

      try {
        const response = await fetchWithAuth(url);
        if (!response.ok) throw new Error('Network response was not ok');
        const result = await response.json();
        const list = document.getElementById('filteredReports');
        list.innerHTML = '';

        if (Array.isArray(result) && result.length === 0) {
          list.innerHTML = `
            <div class="no-report-message">
              No reports with status: <strong>${status}</strong>
            </div>
          `;
          return;
        }

        if (Array.isArray(result)) {
          list.innerHTML = result.map(report => `
            <div class="card">
              <h3>${report.problem_type}</h3>
              <p><strong>Description:</strong> ${report.description}</p>
              <p><strong>Room Location:</strong> ${report.room_location}</p>
              <p><strong>Status:</strong> ${report.status}</p>
            </div>
          `).join('');
        } else {
          console.error('Data structure is not as expected:', result);
          showToast('Unexpected data format received from server.', 'error');
        }
      } catch (error) {
        console.error("Error occurred:", error);
        showToast('An error occurred while fetching data.', 'error');
      }
    });
  </script>
</body>
</html>