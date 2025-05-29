# 🗂️ Task Management System (PHP & MySQL)

🛠️ Employee Task Management System (JIRA-like)
This is a task management system designed to streamline project development workflows across multiple departments such as UI/UX Design, Frontend, Backend, and Database.

Key Features:

Manager Dashboard: Assign tasks to employees with deadlines and track their progress.

Employee Dashboard: View assigned tasks with status columns: To Do, In Progress, Done.

Real-time Updates: Task status changes by employees are reflected in the manager's view.

Departmental Coordination: Tasks are categorized and assigned based on department (e.g., Design, Frontend).

Workflow Automation: Once a task is marked as Done, the manager can assign the next task seamlessly.

Ideal for managing team productivity, improving transparency, and ensuring timely project delivery.

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

## 🙌 Acknowledgements

Built as part of a learning or portfolio project to demonstrate full-stack PHP and MySQL development.
