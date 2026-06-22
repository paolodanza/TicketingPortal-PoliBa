# Poliba IT Service Alert System

A full-stack web application designed to report, track, and manage IT service disruptions for the digital services of the Politecnico di Bari (Poliba). 

This project was built to demonstrate a solid understanding of backend development, relational database design, and the implementation of the Model-View-Controller (MVC) architectural pattern.

## 🚀 Features

The system provides tailored functionalities based on three distinct user roles:

* **Anonymous User:**
    * Browse the list of available IT services and check their current operational status.
    * Submit a disruption report (ticket) selecting a specific service and issue category.
    * Attach files to the report for better context.
    * Check the status of a previously submitted ticket using its unique ID.
* **Service Manager (Responsabile):**
    * Access a personalized dashboard via secure login.
    * Monitor and view all tickets associated with their assigned services.
    * Update the operational status of their services (e.g., *Active*, *Inactive*, *Under Maintenance*) to provide real-time feedback to users.
    * Manage the association between services and issue categories.
* **Administrator (Amministratore):**
    * Full CRUD (Create, Read, Update, Delete) capabilities over the entire system.
    * Manage IT services, issue categories, and create accounts for Service Managers.

## 🛠️ Tech Stack

* **Backend:** PHP 8+, CodeIgniter 4 (MVC Architecture)
* **Database:** PostgreSQL (Managed via pgAdmin)
* **Frontend:** HTML5, CSS3, JavaScript (UI designed with Nicepage)

## 🏗️ Architecture & Database Design

The application heavily relies on the **MVC pattern** to ensure a strict separation of concerns between data management, business logic, and graphic presentation. 

The PostgreSQL database was designed with data normalization in mind. It includes:
* Structured tables for Users (Roles), Services, Tickets, and Categories.
* Entity relationships (One-to-Many, Many-to-Many) with enforced integrity constraints (Primary/Foreign Keys with `CASCADE` and `SET NULL` rules).
* Custom SQL **Triggers** to automate business rules (e.g., ensuring a Service is only assigned to a user with the 'Manager' role).

## ⚙️ Local Setup & Installation

The project is designed to be easily hosted on a local environment.

1.  **Clone the repository:**
    ```bash
    git clone [url repo](https://github.com/paolodanza/TicketingPortal-PoliBa.git)
    cd your-repo-name
    ```

2.  **Database Configuration:**
    * Open your PostgreSQL GUI (e.g., pgAdmin) and create a new database.
    * Execute the provided SQL/DDL scripts (located in the `database` folder) to generate the tables, constraints, and triggers.
    * Open the project codebase and navigate to the database configuration file (usually `app/Config/Database.php`).
    * Update the credentials (hostname, username, password, database name) to match your local PostgreSQL setup.

3.  **Run the application:**
    * You can serve the application using your preferred local server environment (e.g., XAMPP, MAMP) by pointing the document root to the `public` folder.
    * Alternatively, use CodeIgniter's built-in development server:
      ```bash
      php spark serve
      ```
    * Open your browser and navigate to `http://localhost:8080` (or your configured local host).

---
*Developed by Paolo Danza as an academic project.*