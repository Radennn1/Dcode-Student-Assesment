Student Management System - Laravel 11
A simple Student Management System built with Laravel 11. This project was created as a submission for the Back-End Developer Internship Task at Dcode Hub.

It features a RESTful API and a complete web-based admin panel to manage student data, including full CRUD (Create, Read, Update, Delete) functionality.

✨ Admin Panel Preview
A quick look at the user interface in action.

(Tip: You can record your own screen as a GIF using tools like LICEcap or ScreenToGif and upload it to GitHub or Giphy to get a link.)

🚀 Key Features
Full CRUD Interface: A user-friendly panel to manage students.

RESTful API: A well-structured API for programmatic access.

Dynamic Search: Instantly find students by name, email, or department.

Pagination: Handles large datasets gracefully without slowing down the UI.

Real-time Notifications: Get instant feedback for your actions.

Secure Deletion: A custom modal confirms your intent before deleting data.

Database Seeding: Comes with dummy data for immediate testing.

🛠️ Tech Stack
Category

Technology

Backend

 

Frontend

 

Database

🔌 API Endpoints
The following API endpoints are available:

Method

URI

Action

GET

/api/students

Retrieve all students

GET

/api/students/{id}

Retrieve a single student

POST

/api/students

Add a new student

PUT

/api/students/{id}

Update a student

DELETE

/api/students/{id}

Delete a student

⚙️ Local Installation Guide
1. Prerequisites
PHP >= 8.2

Composer

Database Server (e.g., MySQL)

2. Setup Steps
Clone the Repository

git clone [YOUR_REPOSITORY_URL]
cd [PROJECT_FOLDER_NAME]

Install Dependencies

composer install

Environment Configuration
Copy .env.example to .env and fill in your database details.

cp .env.example .env
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=dcodehub_task
DB_USERNAME=root
DB_PASSWORD=

Generate App Key

php artisan key:generate

Run Migrations & Seed Data
This command will create the tables and populate them with dummy data.

php artisan migrate --seed

Run the Server

php artisan serve

The application will be available at http://127.0.0.1:8000.

Thank you for reviewing my submission. I am eager to discuss this project and my potential to contribute to the Dcode Hub team.