Student Management System - Dcode Hub Internship Task
This project is an implementation of the technical task for the Back-End Developer Internship position at Dcode Hub. It is a simple student management system built with Laravel 11.

The application includes a RESTful API to manage student data and a web-based admin panel to visually interact with the API.

(Note: You can replace the image URL above with a screenshot of your own application after uploading it to a service like Imgur)

✨ Features
Backend (RESTful API)
✅ List Students: GET /api/students

✅ Get Single Student: GET /api/students/{id}

✅ Add New Student: POST /api/students

✅ Update Student: PUT /api/students/{id}

✅ Delete Student: DELETE /api/students/{id}

✅ Input Validation: Robust validation on every store and update request.

Frontend
✅ Dashboard: A main page that displays a list of students.

✅ CRUD Interface: A full web interface to Create, Read, Update, and Delete student data.

✅ Search: A feature to search for students by name, email, or department.

✅ Pagination: The student list is paginated for better performance.

✅ Notifications: Informative success or error messages after every action (e.g., "Student added successfully!").

✅ Confirmation Modal: A visually appealing popup to confirm deletion, preventing accidental data loss.

🛠️ Tech Stack
Backend: Laravel 11, PHP 8.2

Frontend: Laravel Blade, Tailwind CSS, JavaScript

Database: MySQL

🚀 Local Installation and Setup
Follow these steps to run this project in your local environment.

1. Prerequisites
PHP >= 8.2

Composer

Node.js & NPM (Optional, for advanced frontend development)

A Database Server (e.g., MySQL, MariaDB)

2. Clone the Repository
Open your terminal and clone this repository.

git clone [YOUR_REPOSITORY_URL]
cd [PROJECT_FOLDER_NAME]

3. Install Dependencies
Install all PHP dependencies using Composer.

composer install

4. Environment Configuration
Copy the .env.example file to .env.

cp .env.example .env

Open the .env file and configure your database connection.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dcodehub_task
DB_USERNAME=root
DB_PASSWORD=

(Adjust DB_DATABASE, DB_USERNAME, and DB_PASSWORD to match your local setup)

5. Generate Application Key
Generate the application key required by Laravel.

php artisan key:generate

6. Run Database Migrations
Create all the necessary tables in your database.

php artisan migrate

7. (Optional) Seed the Database with Dummy Data
You can populate the students table with dummy data for testing.

php artisan db:seed

(Note: You would need to create a seeder first if one doesn't exist. Alternatively, you can use the SQL queries I provided earlier.)

8. Run the Development Server
Now you are ready to run the application.

php artisan serve

The application will be available at http://127.0.0.1:8000. Open this address in your browser.

Thank you for reviewing my submission. I look forward to discussing this project and my potential to contribute to the Dcode Hub team.