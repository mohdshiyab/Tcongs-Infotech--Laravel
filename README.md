# Laravel Student Management System

A simple CRUD application built with Laravel, demonstrating MVC architecture,
routing, Eloquent ORM, and MySQL.

## Features

- Create students
- View all students (list)
- View a single student's details
- Edit students
- Delete students
- Form validation (server-side)
- Success/error flash messages
- Bootstrap UI

## Tech Stack

- Laravel (PHP)
- MySQL
- Blade templating
- Bootstrap 5
- Eloquent ORM

## Architecture (MVC)

```
User → Route (routes/web.php) → Controller (StudentController)
                                       │
                          ┌────────────┴────────────┐
                          ▼                          ▼
                       Model                    Validation
                    (Student.php)
                          │
                          ▼
                      Eloquent → MySQL
                          │
                          ▼
                     Controller → Blade View → User
```

## Project Structure

```
student-management/
├── app/
│   ├── Http/Controllers/StudentController.php
│   └── Models/Student.php
├── database/migrations/xxxx_create_students_table.php
├── resources/views/
│   ├── layouts/app.blade.php
│   ├── dashboard.blade.php
│   └── students/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── show.blade.php
│       ├── edit.blade.php
│       └── _form.blade.php   (shared create/edit form partial)
├── routes/web.php
├── .env.example
└── README.md
```

## Installation

This repo ships only the **application-specific files** (controller, model,
migration, views, routes). You'll generate the Laravel skeleton itself
locally, then drop these files in.

1. **Create a fresh Laravel project**

   ```bash
   composer create-project laravel/laravel student-management
   cd student-management
   ```

2. **Copy this repo's files into it**, overwriting/adding:
   - `app/Models/Student.php`
   - `app/Http/Controllers/StudentController.php`
   - `database/migrations/2026_08_12_000000_create_students_table.php`
   - `routes/web.php`
   - `resources/views/layouts/app.blade.php`
   - `resources/views/dashboard.blade.php`
   - `resources/views/students/*.blade.php`
   - `.env.example` (merge with the generated one if needed)

3. **Create the MySQL database**

   ```sql
   CREATE DATABASE student_management;
   ```

4. **Configure `.env`**

   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=student_management
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate the app key and run migrations**

   ```bash
   php artisan key:generate
   php artisan migrate
   ```

6. **Serve the app**

   ```bash
   php artisan serve
   ```

   Visit `http://127.0.0.1:8000` — you'll land on the dashboard.

## Routes

| Method    | URI                     | Action                  |
|-----------|-------------------------|--------------------------|
| GET       | /students                | index (list)             |
| GET       | /students/create         | create (form)            |
| POST      | /students                | store                    |
| GET       | /students/{student}      | show                     |
| GET       | /students/{student}/edit | edit (form)              |
| PUT/PATCH | /students/{student}      | update                   |
| DELETE    | /students/{student}      | destroy                  |

All generated via `Route::resource('students', StudentController::class);`.

## Screenshots

_Add screenshots here after running the app (dashboard, list, add form,
details, edit form, DB table)._

## Author

Mohammad Shiyabuddeen
