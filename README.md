# Laravel 11 API CRUD with Authentication using Laravel Sanctum

This project is a RESTful API built with Laravel 11, providing basic CRUD functionality for an `Article` resource and user authentication using Laravel Sanctum.

### Prerequisites

- PHP >= 8.2
- SQLite or any other supported database

### Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/shakhawatmollah/laravel-api-crud.git
   cd laravel-api-crud

## Project Create - Start

2. **Create a New Laravel Project**
   ```bash
   laravel new laravel-api-crud
   ```

3. **Install Dependencies**
   ```bash
   composer install
   ```

4. **Set Up Environment Variables**

   Copy the `.env.example` file to create a new `.env` file:
   ```bash
   cp .env.example .env
   ```

   Update the `.env` file with your database configuration and Sanctum settings.

5. **Run the API Installation Command**
   ```bash
   php artisan install:api
   ```

6. **Generate an Application Key**
   ```bash
   php artisan key:generate
   ```

### Commands Used in Project Setup

1. **Create the Article Model, Migration, and Controller for API**
   ```bash
   php artisan make:model Article -mc --api
   ```

2. **Create Form Requests for Article Validation**

    - **Store Request**: For validation when creating an article
      ```bash
      php artisan make:request ArticleStoreRequest
      ```

    - **Update Request**: For validation when updating an article
      ```bash
      php artisan make:request ArticleUpdateRequest
      ```

3. **Add Role Column to Users Table**
   ```bash
   php artisan make:migration add_role_to_users_table
   ```

4. **Create Authentication Controller**
   ```bash
   php artisan make:controller AuthController
   ```

5. **Create Middleware for Admin Access**
   ```bash
   php artisan make:middleware AdminMiddleware
   ```

6. **Run Database Migrations**
   ```bash
   php artisan migrate:fresh
   ```
## Project Create - End

### Authentication

This project uses **Laravel Sanctum** for API token-based authentication.

- Register and log in users using Sanctum.
- Protect routes with Sanctum's `auth:sanctum` middleware for authenticated access.
- Use custom `AdminMiddleware` to secure routes for users with administrative roles.

### API Endpoints

- **Authentication**
    - `POST /api/register` – Register a new user.
    - `POST /api/login` – Log in a user and retrieve a token.
    - `POST /api/logout` – Log out the authenticated user.

- **Articles**
    - `GET /api/v1/articles` – List all articles.
    - `GET /api/v1/articles/{id}` – Show a single article.
    - `POST /api/v1/articles` – Create a new article (Admin only).
    - `PUT /api/v1/articles/{id}` – Update an article (Admin only).
    - `DELETE /api/v1/articles/{id}` – Delete an article (Admin only).

### Running the Application

1. **Serve the Application**
   ```bash
   php artisan serve
   ```
