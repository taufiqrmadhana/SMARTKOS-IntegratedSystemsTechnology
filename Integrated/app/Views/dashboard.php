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
      background-color: #eef2f3; /* Light background for variety */
      color: #333;
      display: flex;
      flex-direction: column;
    }
    header {
      background: linear-gradient(45deg, #343a40, #495057);
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
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      background-color: #fff;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
      margin-bottom: 1rem;
      color: #333;
    }
    .card:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
    }
    .card-header {
      background: #007bff;  /* Brighter header for cards */
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
      color: #333;
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
    /* Pastikan teks form update terlihat */
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
            <h5 class="mb-0">Submit Maintenance Request</h5>
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
            <h5 class="mb-0">Maintenance Reports</h5>
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
          <h5 class="modal-title">Update Maintenance Request</h5>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const baseUrl = "https://blue-alpaca-681720.hostingersite.com";

    document.addEventListener("DOMContentLoaded", () => {
      fetchReports();
      fetchStats();
    });

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
          const li = document.createElement("li");
          li.className = "list-group-item d-flex justify-content-between align-items-start";
          li.innerHTML = `
            <div>
              <strong>${sanitizeHTML(report.maintenance_type)}</strong> 
              <small>(${sanitizeHTML(report.scheduled_date)})</small><br />
              <span>${sanitizeHTML(report.description)}</span>
            </div>
            <div>
              <button class="btn btn-sm btn-dark me-1" onclick="openUpdateModal(${report.id}, '${sanitizeAttribute(report.maintenance_type)}', '${sanitizeAttribute(report.facility)}', '${sanitizeAttribute(report.scheduled_date)}', '${sanitizeAttribute(report.description)}', '${sanitizeAttribute(report.status)}')">Edit</button>
              <button class="btn btn-sm btn-outline-dark" onclick="deleteReport(${report.id})">Delete</button>
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
          fetchReports();
          fetchStats();
          e.target.reset();
        } else {
          const errorData = await response.json();
          alert(`Error: ${errorData.message || 'Failed to submit maintenance request.'}`);
        }
      } catch (error) {
        console.error('Error submitting form:', error);
        alert('An error occurred while submitting the form.');
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
          fetchReports();
          fetchStats();
          const modal = bootstrap.Modal.getInstance(document.getElementById("updateModal"));
          modal.hide();
        } else {
          const errorData = await response.json();
          alert(`Error: ${errorData.message || 'Failed to update maintenance request.'}`);
        }
      } catch (error) {
        console.error('Error updating form:', error);
        alert('An error occurred while updating the form.');
      }
    });

    async function deleteReport(id) {
      if (!confirm('Are you sure you want to delete this report?')) return;

      try {
        const response = await fetch(`${baseUrl}/maintenance/delete/${id}`, { method: "DELETE" });
        if (response.ok) {
          fetchReports();
          fetchStats();
        } else {
          const errorData = await response.json();
          alert(`Error: ${errorData.message || 'Failed to delete maintenance report.'}`);
        }
      } catch (error) {
        console.error('Error deleting report:', error);
        alert('An error occurred while deleting the report.');
      }
    }

    function logout() {
      window.location.href = "/login";
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
