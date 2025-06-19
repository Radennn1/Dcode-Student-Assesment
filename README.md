
# 🎓 Student Management System - Dcode Hub Internship Task

This project is an implementation of the technical task for the **Back-End Developer Internship** at Dcode Hub. It is a simple Student Management System built with **Laravel 11**.

The application includes a RESTful API to manage student data and a **web-based admin panel** to visually interact with the API.

---

## ✨ Features

### 🧠 Backend (RESTful API)
- ✅ **List Students** — `GET /students`
- ✅ **Get Single Student** — `GET /students/{id}`
- ✅ **Add New Student** — `POST /students`
- ✅ **Update Student** — `PUT /students/{id}`
- ✅ **Delete Student** — `DELETE /students/{id}`
- ✅ **Input Validation** — Robust validation on store & update requests

### 🖥️ Frontend (Admin Panel)
- ✅ **Dashboard** — Displays list of all students
- ✅ **CRUD Interface** — Create, Read, Update, Delete student data
- ✅ **Search** — By name, email, or department
- ✅ **Pagination** — For optimal performance
- ✅ **Notifications** — Success/error messages after actions
- ✅ **Confirmation Modal** — Prevents accidental deletion

---

## 🛠️ Tech Stack

| Layer     | Technology                      |
|-----------|----------------------------------|
| Backend   | Laravel 11, PHP 8.2              |
| Frontend  | Laravel Blade, Tailwind CSS, JavaScript |
| Database  | MySQL                            |

---

## 🚀 Local Installation & Setup

Follow these steps to run the project locally.

### 1. Prerequisites
- PHP ≥ 8.2
- Composer
- Node.js & NPM *(optional, for frontend customization)*
- Database server (e.g., MySQL/MariaDB)

### 2. Clone the Repository
```bash
git clone https://github.com/Radennn1/Dcode-Student-Assesment.git
cd Dcode-Student-Assesment
```

### 3. Install Dependencies
```bash
composer install
```

### 4. Environment Setup
Copy `.env.example` to `.env` and configure your database connection:
```bash
cp .env.example .env
```

Edit your `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dcodehub_task
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Run Migrations
```bash
php artisan migrate
```

### 7. (Optional) Seed Dummy Data
```bash
php artisan db:seed
```
> ⚠️ Ensure a seeder exists or create one manually if needed.

### 8. Start Development Server
```bash
php artisan serve
```

Visit [http://127.0.0.1:8000/students](http://127.0.0.1:8000/students) in your browser.

---

## 🙏 Thank You

Thank you for reviewing my submission.  
I look forward to discussing this project and my potential contribution to the Dcode Hub team.

---
