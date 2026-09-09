# Simple POS System

A basic four-page Point-of-Sale system developed using CodeIgniter 4.

## Application Pages

- Home
- About
- Customer Accounts
- User Accounts

## Features

- CodeIgniter 4 routing
- MVC-based project structure
- Static PHP arrays as temporary data sources
- Customer and staff account listings
- Responsive black and light-gray interface
- Navigation between all four pages

## Requirements

- PHP 8.2 or later
- Composer

## Installation

1. Clone this repository.
2. Open a terminal inside the project folder.
3. Install the dependencies:

```bash
composer install
```

4. Rename `env` to `.env`.
5. Configure `.env`:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8081/'
```

6. Start the application:

```bash
php spark serve --port 8081
```

7. Open `http://localhost:8081` in a browser.

## Data Source

This version uses static PHP arrays as required by the activity. No database
or database export is included in this version.

