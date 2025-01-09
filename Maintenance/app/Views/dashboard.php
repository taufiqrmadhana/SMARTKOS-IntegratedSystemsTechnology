<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SmartKos Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <style>
    html, body {
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
      background: #343a40;
    }
    .navbar {
      padding: 0.5rem 1rem;
    }
    .navbar-brand {
      font-weight: 500;
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
      border: 1px solid #dc3545;
      color: #fff;
      background: #dc3545;
    }
    .btn-logout:hover {
      background: #c82333;
      border-color: #bd2130;
    }
    footer {
      text-align: center;
      padding: 1rem 0;
      background-color: #343a40;
      color: #fff;
      flex-shrink: 0;
      border-top: none;
    }
    .content-area {
      flex: 1 0 auto;
      padding: 1rem;
    }
    .card {
      border: none;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      background-color: #fff;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      margin-bottom: 1rem;
    }
    .card:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }
    .card-header {
      background: #007bff;
      color: #fff;
      border-bottom: none;
      border-radius: 8px 8px 0 0;
      padding: 0.75rem 1rem;
    }
    .card-body {
      padding: 1rem;
    }
    .list-group-item {
      border: none;
      border-bottom: 1px solid #eaeaea;
      padding: 0.75rem 1rem;
      background-color: #fff;
    }
    .list-group-item:last-child {
      border-bottom: none;
    }
    select.form-select, input.form-control, textarea.form-control {
      border-radius: 4px;
      border: 1px solid #ccc;
      background-color: #fff;
      color: #333;
    }
    select.form-select:focus, input.form-control:focus, textarea.form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }
    .modal-body .form-control {
      color: #333;
    }
    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }
    .btn-primary:hover {
      background-color: #0056b3;
      border-color: #004085;
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
        font-size: 1rem;
      }
      .card-body {
        padding: 0.75rem;
      }
      .list-group-item {
        padding: 0.5rem;
      }
      .btn-sm {
        padding: 0.25rem 0.5rem;
        font-size: 0.75rem;
      }
    }
    /* Styling untuk Maintenance Reports */
    .report-item {
      border-bottom: 1px solid #eaeaea;
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
    }
    .badge-status {
      font-size: 0.9rem;
      padding: 0.35em 0.65em;
      color: #fff;
    }
    /* Toast container */
    #toast-container {
      z-index: 11;
    }
  </style>
</head>
<body>
  <!-- Header -->
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

  <!-- Konten Utama -->
  <div class="content-area container-fluid">
    <div class="row">
      <!-- Submit Form -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-header">
            <h5 class="mb-0">Maintenance Schedulling</h5>
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
            <h5 class="mb-0">Statistics</h5>
          </div>
          <div class="card-body" id="stats">
            <!-- Statistik akan diisi oleh JavaScript -->
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
    <p>&copy; 2025 SmartKos. All rights reserved.</p>
  </footer>

  <!-- Toast Container -->
  <div id="toast-container" aria-live="polite" aria-atomic="true" class="position-fixed bottom-0 end-0 p-3"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const baseUrl = "https://blue-alpaca-681720.hostingersite.com";

    document.addEventListener("DOMContentLoaded", () => {
      fetchReports();
      fetchStats();
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
        const statsDiv = document.getElementById("stats");
        statsDiv.innerHTML = `
          <p><strong>Total Requests:</strong> ${sanitizeHTML(data.total_schedules)}</p>
          <p><strong>Pending:</strong> ${sanitizeHTML(data.pending)}</p>
          <p><strong>Scheduled:</strong> ${sanitizeHTML(data.scheduled)}</p>
          <p><strong>Completed:</strong> ${sanitizeHTML(data.completed)}</p>
        `;
      } catch (error) {
        console.error('Error fetching stats:', error);
        const statsDiv = document.getElementById("stats");
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
  </script>
</body>
</html>
