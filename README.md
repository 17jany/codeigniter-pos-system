# Tasks for Today Management System

A CodeIgniter 4 web application that displays today's tasks, the complete task list, one demo user profile, and developer information.

## Features

- Welcome page showing only tasks scheduled for today
- Task List page showing all tasks ordered by date
- Profile page showing one demo user
- Static About page identifying the developer
- MySQL database integration

## Requirements

- PHP 8.1 or newer
- Composer
- MySQL or MariaDB
- XAMPP or another local database server

## Installation

1. Clone or download this repository.

2. Open a terminal inside the project folder.

3. Install the dependencies:

```bash
composer install
```

4. Copy or rename the `env` file to `.env`.

5. Configure the database connection inside `.env`:

```ini
CI_ENVIRONMENT = development

app.baseURL = 'http://localhost:8080/'

database.default.hostname = 127.0.0.1
database.default.database = tasks_today
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

## Database Setup

1. Start Apache and MySQL using XAMPP.
2. Open [phpMyAdmin](http://localhost/phpmyadmin).
3. Create a database named `tasks_today`.
4. Import the included `tasks_today.sql` file.

The database contains:

- At least 8 task records
- Tasks spanning at least 3 different dates
- Tasks scheduled for the current date
- Exactly one demo user record

## Running the Application

Run the CodeIgniter development server:

```bash
php spark serve --port 8080
```

If the `php` command is not recognized on Windows, use:

```powershell
& "D:\Xampp\php\php.exe" spark serve --port 8080
```

Open the application pages:

- Welcome Page: [http://localhost:8080/](http://localhost:8080/)
- Task List: [http://localhost:8080/tasks](http://localhost:8080/tasks)
- Profile: [http://localhost:8080/profile](http://localhost:8080/profile)
- About: [http://localhost:8080/about](http://localhost:8080/about)

> The localhost links work only while the CodeIgniter development server is running on the computer.

## Application Routes

| Page | Route | Description |
|---|---|---|
| Welcome | `/` | Displays only tasks scheduled for today |
| Task List | `/tasks` | Displays every task ordered by date |
| Profile | `/profile` | Displays the single demo user |
| About | `/about` | Displays information about the system developer |

## Developer

**Janyrose Guelas**

GitHub: [@17jany](https://github.com/17jany)