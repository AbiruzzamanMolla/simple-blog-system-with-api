# Simple Blog System with API

A modern, component-based blog system built with Laravel 12, PHP 8.3, and Bootstrap 5.

## Installation

Follow these steps to set up the project locally:

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
    - Configure your database settings in `.env`.
    - Generate application key:

        ```bash
        php artisan key:generate
        ```

4. **Database Setup & Seeding**:
   Run migrations and seed the initial admin account:

    ```bash
    php artisan migrate:fresh --seed
    ```

5. **Build Assets**:

    ```bash
    npm run dev
    # or
    npm run build
    ```

6. **Start the Server**:

    ```bash
    php artisan serve
    ```

## Admin Credentials

After seeding, you can log in with:

- **Email**: `admin@gmail.com`
- **Password**: `password`
