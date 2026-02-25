# Simple Blog System with API

A modern blog system built with Laravel 12, PHP 8.3, and Bootstrap 5.

## Requirements

- **PHP**: ^8.3
- **Composer**: ^2.x

## Installation

1. **Clone the repository**:

    ```bash
    git clone <repository-url>
    cd simple-blog-system-with-api
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    ```

3. **Environment Setup**:
    - Copy `.env.example` to `.env`.
    - Configure your database settings.
    - Run: `php artisan key:generate`

4. **Database Setup & Seeding**:

    ```bash
    php artisan migrate:fresh --seed
    ```

5. **Build Assets**:

    ```bash
    npm run build
    # or
    npm run dev
    ```

## Admin Credentials

- **Email**: `admin@gmail.com`
- **Password**: `password`

## Public API Endpoints

- `GET /api/posts`: Paginated list of published posts.
- `GET /api/posts/{slug}`: Single post details.

## Feature Cleanup & Optimization

In adherence to the core project requirements, the following non-essential features and dependencies were removed to ensure a lean and focused codebase:

- **Registration Management**: Default registration routes and views were removed. Admin accounts should be managed via seeders or manual database entry.
- **Profile Management**: Profile update and password reset forms were removed as they were not required for the task.
- **Laravel Sanctum**: Removed the Sanctum package and its associated migrations/config since the API is designed for public read-only access.
- **API Rate Limiting**: Implemented standard Laravel request throttling (60 req/min) for public API endpoints instead of session/token-based auth.
