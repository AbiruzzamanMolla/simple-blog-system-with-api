# Simple Blog System with API

A simple blog system built with Laravel 12, PHP 8.3, and Bootstrap 5.

## Requirements

- **PHP**: ^8.3
- **Composer**: ^2.x

## Installation

1. **Clone the repository**:

    ```bash
    git clone https://github.com/AbiruzzamanMolla/simple-blog-system-with-api
    cd simple-blog-system-with-api
    ```

2. **Install dependencies**:

    ```bash
    composer install
    npm install
    ```

3. **Environment Setup**:
    - Copy `.env.example` to `.env`.
    - Run: `php artisan key:generate`

4. **Database Configuration (SQLite)**:
    - This project uses **SQLite**. To initialize the database, create an empty sqlite file:

    ```bash
    touch database/database.sqlite
    ```

    - Ensure your `.env` has: `DB_CONNECTION=sqlite`

5. **Database Setup & Seeding**:

    ```bash
    php artisan migrate:fresh --seed
    ```

6. **Build Assets**:

    ```bash
    npm run build
    # or
    npm run dev
    ```

7. **Start the Server**:

    ```bash
    php artisan serve
    ```

## Admin Credentials

- **Email**: `admin@gmail.com`
- **Password**: `password`

## Public API Endpoints

- `GET /api/posts`: Paginated list of published posts.
- `GET /api/posts/{slug}`: Single post details.
