# Laravel Student Management System

A simple **Student Management System** built with Laravel to demonstrate the fundamentals of **MVC architecture, Routing, Eloquent ORM, Database Migrations, Validation, and CRUD operations**.

## 🚀 Features

* Student dashboard
* Create a new student
* View all students
* View individual student details
* Edit student information
* Delete students
* Server-side form validation
* Unique email validation
* Success and error flash messages
* Pagination
* Responsive Bootstrap UI
* MySQL database integration
* Laravel Eloquent ORM

---

## 🛠️ Tech Stack

* **Backend:** Laravel / PHP
* **Database:** MySQL
* **Frontend:** Blade Templates + Bootstrap
* **ORM:** Laravel Eloquent
* **Development Server:** Laravel Artisan
* **Version Control:** Git / GitHub

---

## 📁 Project Structure

```text
student-management/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── StudentController.php
│   │
│   └── Models/
│       └── Student.php
│
├── database/
│   └── migrations/
│       └── create_students_table.php
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       ├── dashboard.blade.php
│       │
│       └── students/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── show.blade.php
│           ├── edit.blade.php
│           └── _form.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── .gitignore
├── artisan
├── composer.json
└── README.md
```

---

## 🏗️ Laravel MVC Architecture

The application follows Laravel's MVC architecture.

```text
                    User
                     │
                     ▼
                  Routes
                     │
                     ▼
                Controller
                 /       \
                /         \
               ▼           ▼
            Model        Blade
               │           │
               ▼           ▼
            Eloquent      View
               │
               ▼
             MySQL
```

### Model

The `Student` model represents the student data stored in the database.

```text
app/Models/Student.php
```

It uses Laravel's **Eloquent ORM** to interact with the `students` table.

### View

Blade templates are responsible for displaying the user interface.

```text
resources/views/students/
```

The application contains views for:

* Listing students
* Creating students
* Viewing student details
* Editing students

### Controller

The `StudentController` contains the application logic for the CRUD operations.

```text
app/Http/Controllers/StudentController.php
```

It implements the standard Laravel resource methods:

```text
index()
create()
store()
show()
edit()
update()
destroy()
```

---

## 🗄️ Database

The application uses MySQL.

### Students Table

The `students` table contains:

| Column     | Description          |
| ---------- | -------------------- |
| id         | Primary key          |
| name       | Student name         |
| email      | Student email        |
| phone      | Student phone number |
| age        | Student age          |
| course     | Student course       |
| created_at | Creation timestamp   |
| updated_at | Update timestamp     |

The table is created using a Laravel database migration.

---

## 🔄 CRUD Workflow

### Create

```text
User
 ↓
Create Student Form
 ↓
POST /students
 ↓
StudentController@store
 ↓
Validation
 ↓
Eloquent
 ↓
MySQL
```

### Read

```text
User
 ↓
GET /students
 ↓
StudentController@index
 ↓
Eloquent
 ↓
Blade View
```

### Update

```text
User
 ↓
Edit Student
 ↓
PUT /students/{student}
 ↓
StudentController@update
 ↓
Eloquent
 ↓
MySQL
```

### Delete

```text
User
 ↓
Delete Student
 ↓
DELETE /students/{student}
 ↓
StudentController@destroy
 ↓
Eloquent
 ↓
MySQL
```

---

## 🛣️ Routes

The application uses Laravel resource routing:

```php
Route::resource('students', StudentController::class);
```

This provides the standard CRUD routes:

| Method    | URL                        | Purpose          |
| --------- | -------------------------- | ---------------- |
| GET       | `/students`                | List students    |
| GET       | `/students/create`         | Show create form |
| POST      | `/students`                | Store student    |
| GET       | `/students/{student}`      | Show student     |
| GET       | `/students/{student}/edit` | Show edit form   |
| PUT/PATCH | `/students/{student}`      | Update student   |
| DELETE    | `/students/{student}`      | Delete student   |

---

## ⚙️ Installation

### 1. Prerequisites

Make sure the following are installed:

* PHP 8.2+
* Composer
* MySQL
* Git

Verify the installation:

```bash
php -v
composer -V
mysql --version
git --version
```

---

### 2. Create Laravel Project

If starting from a fresh installation:

```bash
composer create-project laravel/laravel student-management
```

Navigate into the project:

```bash
cd student-management
```

Copy the application files from this repository into the Laravel project.

---

### 3. Install Dependencies

If required:

```bash
composer install
```

---

### 4. Configure Environment

Create the `.env` file:

```bash
cp .env.example .env
```

On Windows, you can also manually copy `.env.example` and rename it to:

```text
.env
```

Configure the database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_management
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
```

Replace the username and password with your local MySQL credentials.

---

### 5. Create Database

Open MySQL and run:

```sql
CREATE DATABASE student_management;
```

---

### 6. Generate Application Key

Run:

```bash
php artisan key:generate
```

---

### 7. Run Database Migration

Run:

```bash
php artisan migrate
```

This creates the required `students` table.

---

### 8. Start Laravel Development Server

Run:

```bash
php artisan serve
```

Open:

```text
http://127.0.0.1:8000
```

---

## 🧪 Testing the Application

After starting the application, test the complete CRUD workflow.

### Create

1. Open the Students page.
2. Click **Add Student**.
3. Enter student information.
4. Submit the form.
5. Verify that the student appears in the list.

### Read

1. Open the Students page.
2. Click **View**.
3. Verify the student's information.

### Update

1. Click **Edit**.
2. Modify the student's information.
3. Save the changes.
4. Verify the updated information.

### Delete

1. Click **Delete**.
2. Confirm the deletion.
3. Verify that the student has been removed.

### Validation

Test invalid input such as:

```text
Empty name
Invalid email
Duplicate email
Invalid age
Missing required fields
```

The application should display appropriate validation errors.

---

## 🔐 Security Considerations

The application uses Laravel's built-in features for:

* Request validation
* CSRF protection
* Route model binding
* Environment-based configuration
* Eloquent ORM

Sensitive configuration should never be committed to Git.

The `.env` file is excluded through `.gitignore`.

Only `.env.example` should be committed.

---

## 📸 Screenshots

Add screenshots of the application here after running it locally.

### Dashboard

```text
Add dashboard screenshot here
```

### Student List

```text
Add student list screenshot here
```

### Create Student

```text
Add create form screenshot here
```

### Student Details

```text
Add student details screenshot here
```

### Edit Student

```text
Add edit form screenshot here
```

---

## 🎯 Learning Objectives

This project was created to demonstrate an understanding of the following Laravel concepts:

* Laravel project structure
* MVC architecture
* Routing
* Controllers
* Blade templates
* Eloquent ORM
* Database migrations
* MySQL integration
* Resource controllers
* Route model binding
* Form validation
* CRUD operations
* CSRF protection
* Environment configuration

---

## 👨‍💻 Author

**Mohammad Shiyabuddeen**

Computer Science Engineering Graduate

### Profiles

* GitHub: [https://github.com/mohdshiyab/Tcongs-Infotech--Laravel]
* LinkedIn: [https://www.linkedin.com/in/mohammad-shiyabuddeen-4b183724b/]

---

## 📄 License

This project was created as a learning and technical assessment project.
