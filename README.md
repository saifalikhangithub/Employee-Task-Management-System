✅ Project Summary
This project is a Task Management System with User and Admin Panels, built using PHP and MySQL. It allows users to register, log in, and update their task progress. Admins can manage users and view their progress.

# 🗂️ Task Management System (PHP & MySQL)

This is a simple web-based Task Management System that allows users to register, log in, and update their task status. It also includes an admin panel for managing users and monitoring their task progress.

## 🔧 Features

- User Registration and Login
- Task progress update functionality
- Session management for login/logout
- Admin dashboard for viewing user details
- MySQL database integration
- Passwords stored securely using hashing

## 🖥️ Screens/Pages

- `index.php`: Homepage showing login status and navigation
- `register.php`: User registration form
- `login.php`: Login form for existing users
- `user.php`: Logged-in user's dashboard with task progress form
- `logout.php`: Ends the session and logs the user out
- `Admin/index.php`: Admin dashboard

## 🛠️ Tech Stack

- **Frontend**: HTML, minimal Bootstrap (used in admin panel)
- **Backend**: PHP
- **Database**: MySQL (`task_management.sql`)

## 📂 Folder Structure



Task Management/
├── Admin/
│ ├── index.php
│ ├── db.php
│ └── database.php
├── db.php
├── index.php
├── login.php
├── logout.php
├── register.php
├── task_management.sql
├── user.php



------Markedown


## 📦 Installation

1. Clone or download this repository.
2. Import the `task_management.sql` file into your MySQL database.
3. Configure your database credentials in `db.php` and `Admin/db.php`.
4. Host the project on a PHP-supported server (e.g., XAMPP, WAMP, or live server).
5. Navigate to `index.php` to begin.

## ✅ Usage

- New users can register via `register.php`.
- Registered users can log in and update task progress.
- Admin can access the dashboard via the `Admin/` panel.

## 🔐 Security Notes

- Passwords are hashed using `password_hash()` for secure storage.
- Basic session management ensures protected access to user and admin pages.

## 📝 License

You can choose to add a license here. For example:  
This project is licensed under the MIT License.

---

## 🙌 Acknowledgements

Built as part of a learning or portfolio project to demonstrate full-stack PHP and MySQL development.
