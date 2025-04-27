<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Job Board Application

Welcome to the Job Board Application - NextStep Collective! This project is a web-based platform for posting and browsing job listings. It is built with Laravel and showcases various features and best practices in web development.

## Features

- **CRUD Operations**: 
  - Create, Read, Update, and Delete operations for job listings.
  - Input sanitization and validation using Laravel Form Requests.

- **Blade Templating**: 
  - Organized views with reusable Blade components for maintainability and scalability.

- **Tagging System**: 
  - Jobs can be tagged with relevant keywords.
  - Scheduled tasks for tag purging and cleaning.

- **Search Functionality**:
  - Advanced search options to easily find job listings.
  - Advanced filtering for Jobs, Salaries etc.

- **Continuous Feature Development**:
  - Regularly adding new features to enhance functionality.

## Planned Features

- **Email Confirmation for Job Posting**:
  - Users receive an email to confirm their job posting.

- **Password Recovery**:
  - Implement password recovery for users to reset their passwords securely.

- **User/Employer Profile Management**:
  - Allow users and employers to edit their profile details.

- **Social Media Integration**:
  - Allow job postings to be shared on social media platforms.


## Installation

To get started with the application, follow these steps:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/g-i-kala/laravel-nextstep-collective.git
   cd job-board
   ```

2. **Install dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**:
   - Copy `.env.example` to `.env` and configure your database and other settings.

4. **Generate application key**:
   ```bash
   php artisan key:generate
   ```

5. **Run migrations**:
   ```bash
   php artisan migrate
   ```

6. **Serve the application**:
   ```bash
   php artisan serve
   ```

## Contributing

Contributions are welcome! Please submit a pull request or open an issue for any improvements or bug fixes.

## License

This project is open-source and available under the [MIT License](LICENSE).
