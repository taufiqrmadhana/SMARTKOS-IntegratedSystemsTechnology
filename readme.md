# README

## Overview
This repository contains two directories:

1. **Integrated**: 
   - Project `smartkos` that interacts with the APIs hosted at:
     - Maintenance API: `https://blue-alpaca-681720.hostingersite.com`
     - Report API: `https://cornflowerblue-wolverine-266402.hostingersite.com/report`
   - Interaction is handled purely via URL + endpoint, without the creation of routes. The project is developed using CodeIgniter 4.
   - **Deployed URL**: `https://darkgray-grouse-813694.hostingersite.com/`

2. **Maintenance**:
   - Project for developing the Maintenance API.
   - **Authentication Rules**:
     - **GitHub/Local**: Authentication is required for all APIs.
     - **Deployed Version**: Authentication is required only for accessing the dashboard, not for the APIs (to allow external access).

---

## Deployment URLs
- **Maintenance Project**: `https://blue-alpaca-681720.hostingersite.com`
- **Report Project (Partner's)**: `https://cornflowerblue-wolverine-266402.hostingersite.com`
- **Integrated**: `https://darkgray-grouse-813694.hostingersite.com`

---

## Local Setup Instructions

To run the projects locally:

### Prerequisites
- Ensure you have PHP, Composer, and a web server (e.g., XAMPP) installed.
- Clone this repository to your local machine.

### Steps
1. **Clone the Repository**:
   ```bash
   git clone <repository_url>
   ```

2. **Change Directory**:
   Navigate to the directory of the project you want to run:
   ```bash
   cd <Integrated_or_Maintenance>
   ```

3. **Update `app.baseURL`**:
   - Open the `public/index.php` file.
   - Locate the `app.baseURL` variable and update it with your local URL (e.g., `http://localhost/<project_name>`).

4. **Set Up `.env`**:
   - Copy the provided `.env.template` file and rename it to `.env`.
   - Configure the `.env` file as needed for your local environment.

5. **Run the Project**:
   - Start your local server and navigate to the base URL in your browser.

---

## Notes
- The `Integrated` project interacts directly with the above-deployed APIs using raw URLs and endpoints.
- Ensure all necessary configurations in the `.env` file are completed before running.
- The `Maintenance` project has stricter authentication policies locally compared to its deployment version to facilitate secure development.

---

## API Interaction (Integrated)
The `Integrated` project does not define custom routes. Instead, it relies on direct calls to the following endpoints:
- **Maintenance API**: 
  - Base URL: `https://blue-alpaca-681720.hostingersite.com`
  - Endpoints:
    - **POST** `/maintenance/create`: Create a new maintenance schedule.
    - **GET** `/maintenance/`: Retrieve all maintenance records.
    - **PUT** `/maintenance/update/{id}`: Update maintenance information by ID.
    - **GET** `/maintenance/filter`: Filter maintenance records based on specific criteria.
    - **GET** `/maintenance/stats`: Retrieve maintenance statistics.
    - **DELETE** `/maintenance/delete/{id}`: Delete a maintenance record by ID.

- **Report API**:
  - Base URL: `https://cornflowerblue-wolverine-266402.hostingersite.com/report`
  - Endpoints:
    - Endpoint details to be specified as required.

---

## Authentication Details (Maintenance)
- **Local Development**:
  - All API endpoints require authentication.
- **Deployed Version**:
  - Only the dashboard requires authentication; API endpoints are publicly accessible to support external use.

---

## Route Details

The following routes are defined in the `routes` file:

### Public Routes
- **GET** `/register`: Display the registration page.
- **GET** `/login`: Display the login page.

### Auth Routes
- **POST** `/auth/register`: Register a new user.
- **POST** `/auth/login`: Authenticate and log in a user.
- **POST** `/auth/logout`: Log out a user.

### Dashboard
- **GET** `/dashboard`: Access the dashboard (requires `auth` and `cors` filters).

### Maintenance Routes (Require `auth` and `cors` filters)
- **POST** `/maintenance/create`: Create a new maintenance schedule.
- **GET** `/maintenance/`: Retrieve all maintenance records.
- **PUT** `/maintenance/update/{id}`: Update maintenance information by ID.
- **GET** `/maintenance/filter`: Filter maintenance records.
- **GET** `/maintenance/stats`: Retrieve maintenance statistics.
- **DELETE** `/maintenance/delete/{id}`: Delete a maintenance record by ID.

---

## Context
The system is designed to manage issue reporting and facility maintenance scheduling in a boarding house (kosan) environment. Key features include:

- **Issue Reporting**: Enables tenants to report issues via an intuitive interface. Reports are stored in a database for monitoring and follow-up by the manager.
- **Maintenance Scheduling**: Allows managers to schedule routine or urgent facility maintenance (e.g., AC, electricity, plumbing).
- **Integration**: Facilitates seamless communication between tenants, managers, and technicians, ensuring transparency and accountability.
- **Technology**: Built with CodeIgniter 4, ensuring scalability, security, and easy integration with various frontends (e.g., web or mobile apps).
- **Security**: Implements strict authentication and authorization mechanisms to protect data.

---

