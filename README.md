# Laravel eCommerce Admin Dashboard

![Laravel](https://img.shields.io/badge/Laravel-8.x-orange)
![FilamentPHP](https://img.shields.io/badge/FilamentPHP-2.x-blue)
![PHP](https://img.shields.io/badge/PHP-%5E7.4%7C%5E8.0-blue)
![License](https://img.shields.io/badge/License-MIT-green)

A robust and feature-rich eCommerce Admin Dashboard built with [Laravel](https://laravel.com) and [FilamentPHP](https://filamentphp.com). This project provides a foundation for managing products, orders, customers, and other essential aspects of an eCommerce platform.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Product Management**: Add, edit, delete, and manage product listings.
- **Order Management**: View and manage customer orders.
- **Customer Management**: Manage customer data.
- **Dashboard Analytics**: View key metrics and insights into store performance.
- **User Roles & Permissions**: Role-based access control for admin users.
- **Responsive Design**: Works on all device sizes.

## Installation

### Prerequisites

Ensure you have the following installed:

- [PHP 7.4+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js & NPM](https://nodejs.org/)

### Steps

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/laravel-ecommerce-admin-dashboard.git
    cd laravel-ecommerce-admin-dashboard
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install && npm run dev
    ```

3. **Environment setup:**

    Copy the `.env.example` to `.env`:

    ```bash
    cp .env.example .env
    ```

    Update your environment variables, especially database settings.

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run migrations and seeders:**

    ```bash
    php artisan migrate --seed
    ```

6. **Serve the application:**

    ```bash
    php artisan serve
    ```

    You can now access the application at `http://localhost:8000`.

## Usage

Once installed, you can log in to the admin dashboard. By default, a seeded admin user is created:

- **Email:** `alaoeneye@gmail.com`
- **Password:** `111111`

From the dashboard, you can manage products, orders, customers, and view analytics.

## Configuration

FilamentPHP allows for extensive customization. For more details on how to extend and customize the admin panel, refer to the [FilamentPHP documentation](https://filamentphp.com/docs).

### Customization Options:

- **Themes:** Customize the look and feel of the dashboard.
- **Widgets:** Add custom widgets to the dashboard.
- **User Roles:** Define custom roles and permissions.


## Contributing

Contributions are welcome! Please submit a pull request or create an issue if you have any ideas or bug reports.

### Steps to Contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Commit your changes with clear and descriptive messages.
4. Push your branch and submit a pull request.

## License

This project is open-source and available under the [MIT License](LICENSE).
