<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SmartKos Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #343a40;
    }
    .card {
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .card-header {
      background-color: #007bff;
      color: white;
    }
    .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .btn-primary:hover {
      background-color: #0056b3;
    }
    .toast-container {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SmartKos Dashboard</a>
      <button class="btn btn-danger" onclick="logout()">Logout</button>
    </div>
  </nav>

  <div class="container mt-4">
    <div class="row">
      <!-- Maintenance Form -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Submit Maintenance Report</div>
          <div class="card-body">
            <form id="submit-maintenance">
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
                  <option value="pending">Pending</option>
                  <option value="scheduled">Scheduled</option>
                  <option value="completed">Completed</option>
                </select>
              </div>
              <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Reports and Maintenance Stats -->
      <div class="col-md-6">
        <div class="card mb-3">
          <div class="card-header">Reports</div>
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <button id="loadReports" class="btn btn-secondary">Load Reports</button>
              <select id="statusFilter" class="form-select w-auto">
                <option value="pending">Pending</option>
                <option value="scheduled">Scheduled</option>
                <option value="completed">Completed</option>
              </select>
              <button id="filterReports" class="btn btn-primary">Filter</button>
            </div>
            <div id="reportsList" class="mt-3"></div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">Maintenance Statistics</div>
          <div class="card-body" id="stats"></div>
        </div>
      </div>
    </div>
  </div>

  <div id="toast-container" class="toast-container"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const baseUrlMaintenance = "https://blue-alpaca-681720.hostingersite.com";
    const baseUrlReport = "https://cornflowerblue-wolverine-266402.hostingersite.com";

    // Toast Notification
    function showToast(message, type = "success") {
      const toastContainer = document.getElementById("toast-container");
      const toast = document.createElement("div");
      toast.className = `toast align-items-center text-white bg-${type} border-0`;
      toast.innerHTML = `
        <div class="d-flex">
          <div class="toast-body">${message}</div>
          <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
        </div>
      `;
      toastContainer.appendChild(toast);
      const bsToast = new bootstrap.Toast(toast);
      bsToast.show();
      toast.addEventListener("hidden.bs.toast", () => toast.remove());
    }

    // Submit Maintenance Report
    document.getElementById("submit-maintenance").addEventListener("submit", async (e) => {
      e.preventDefault();
      const data = {
        maintenance_type: document.getElementById("type").value,
        facility: document.getElementById("facility").value,
        scheduled_date: document.getElementById("scheduled-date").value,
        description: document.getElementById("description").value,
        status: document.getElementById("status").value,
      };

      try {
        const response = await fetch(`${baseUrlMaintenance}/maintenance/create`, {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(data),
        });
        if (!response.ok) throw new Error("Failed to submit maintenance report");
        showToast("Maintenance report submitted successfully", "success");
        fetchStats();
      } catch (error) {
        console.error(error);
        showToast("Error submitting maintenance report", "danger");
      }
    });

    // Fetch Reports
    async function fetchReports() {
      try {
        const response = await fetch(`${baseUrlReport}/report`);
        if (!response.ok) throw new Error("Failed to fetch reports");
        const reports = await response.json();
        const reportsList = document.getElementById("reportsList");

        reportsList.innerHTML = reports.length
          ? reports.map(report => `
              <div class="card mb-2">
                <div class="card-body">
                  <h5>${report.problem_type}</h5>
                  <p>${report.description}</p>
                  <p><strong>Location:</strong> ${report.room_location}</p>
                  <p><strong>Status:</strong> ${report.status}</p>
                </div>
              </div>
            `).join("")
          : "<p>No reports available</p>";
      } catch (error) {
        console.error(error);
        showToast("Error fetching reports", "danger");
      }
    }

    // Filter Reports by Status
    async function filterReports() {
      const status = document.getElementById("statusFilter").value;
      try {
        const response = await fetch(`${baseUrlReport}/report/status/${status}`);
        if (!response.ok) throw new Error("Failed to fetch filtered reports");
        const reports = await response.json();
        const reportsList = document.getElementById("reportsList");

        reportsList.innerHTML = reports.length
          ? reports.map(report => `
              <div class="card mb-2">
                <div class="card-body">
                  <h5>${report.problem_type}</h5>
                  <p>${report.description}</p>
                  <p><strong>Location:</strong> ${report.room_location}</p>
                  <p><strong>Status:</strong> ${report.status}</p>
                </div>
              </div>
            `).join("")
          : `<p>No reports found with status: ${status}</p>`;
      } catch (error) {
        console.error(error);
        showToast("Error filtering reports", "danger");
      }
    }

    // Fetch Maintenance Stats
    async function fetchStats() {
      try {
        const response = await fetch(`${baseUrlMaintenance}/maintenance/stats`);
        if (!response.ok) throw new Error("Failed to fetch maintenance stats");
        const stats = await response.json();

        document.getElementById("stats").innerHTML = `
          <p><strong>Total Requests:</strong> ${stats.total_schedules}</p>
          <p><strong>Pending:</strong> ${stats.pending}</p>
          <p><strong>Scheduled:</strong> ${stats.scheduled}</p>
          <p><strong>Completed:</strong> ${stats.completed}</p>
        `;
      } catch (error) {
        console.error(error);
        showToast("Error fetching stats", "danger");
      }
    }

    // Event Listeners
    document.getElementById("loadReports").addEventListener("click", fetchReports);
    document.getElementById("filterReports").addEventListener("click", filterReports);

    // Logout Simulation
    function logout() {
      showToast("Logged out successfully", "success");
      setTimeout(() => (window.location.href = "/login"), 1500);
    }

    // Initial Data Load
    document.addEventListener("DOMContentLoaded", fetchStats);
  </script>
</body>
</html>
