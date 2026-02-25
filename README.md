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
