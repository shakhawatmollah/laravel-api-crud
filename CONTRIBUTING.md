# Contributing to Laravel 11 API CRUD Project

Thank you for considering contributing to this project! Your contributions are invaluable for making this Laravel API CRUD project better and more robust. This document outlines the guidelines for contributing to the project.

## Getting Started

1. **Fork the Repository**

   Start by forking this repository to your own GitHub account.

2. **Clone the Forked Repository**

   Clone your forked repository to your local machine.

   ```bash
   git clone https://github.com/your-username/laravel-api-crud.git
   cd laravel-api-crud
   ```

3. **Set Up the Environment**

   Install all required dependencies and configure environment variables:

   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```

   Update the `.env` file with your local database configuration.

4. **Run Database Migrations**

   Migrate the database to set up all necessary tables.

   ```bash
   php artisan migrate
   ```

## Contribution Workflow

### 1. Create a New Branch

Create a new branch for each feature, bug fix, or improvement. Ensure your branch name is descriptive:

```bash
git checkout -b feature/new-api-endpoint
```

### 2. Make Your Changes

- Follow [PSR-12 coding standards](https://www.php-fig.org/psr/psr-12/).
- Write unit tests for new features or modifications.
- Ensure changes are consistent with the project's style and purpose.

### 3. Test Your Changes

Run tests to confirm your code doesn’t break anything. Add new tests if necessary:

```bash
php artisan test
```

### 4. Commit Your Changes

Write clear and concise commit messages. Follow this format:

```plaintext
[Type] Short description of change

More detailed description if necessary.
```

Types can include:
- `feat`: A new feature
- `fix`: A bug fix
- `docs`: Documentation changes
- `style`: Code style changes (formatting, indentation, etc.)
- `refactor`: Code refactoring
- `test`: Adding or modifying tests

Example:

```plaintext
feat: add authentication to articles API
```

### 5. Push to GitHub

Push your changes to your forked repository:

```bash
git push origin feature/new-api-endpoint
```

### 6. Open a Pull Request (PR)

- Go to the original repository and open a new pull request.
- Ensure your PR includes a detailed description of the changes.
- Link any relevant issues in your PR description.

### 7. Code Review

Your PR will be reviewed by a maintainer. You may be asked to make adjustments based on feedback.

## Code of Conduct

Be respectful and constructive when working with others in the project. Ensure that your contributions are collaborative and helpful.

## Reporting Issues

If you find any issues with the project, please submit a detailed issue report. Include relevant details, error messages, or screenshots to help maintainers resolve the issue quickly.

## Feature Requests

We welcome suggestions to improve the project. Submit an issue with a detailed feature request and rationale for why it would be useful.

---

Thank you for helping to make this project better!
