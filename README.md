# 🧀 Brie_Liant

Welcome to **Brie_Liant** – a cheese-loving e-commerce platform where users can explore and manage a wide range of cheeses! 🧀✨

## 📖 About the Project

Brie_Liant is a Laravel-based website where users can browse products, filter them by category, and view detailed information about each cheese. Admin users have the ability to manage products with full CRUD functionality (Create, Read, Update, Delete).

## 🚀 Features

### 👤 Regular Users

-   View a list of all products
-   Filter products by category
-   Click on individual products to see detailed information

### 🔧 Admin Features

-   Create new products
-   Edit existing products
-   Delete products
-   Manage content via the Laravel admin interface

## 🛠️ Technologies & Packages

-   **Laravel** – Backend framework
-   **Laravel Breeze** – Handles authentication and user management
-   **Laravel Lang** – Handles multilingual support
-   **Blade (HTML)** – Template engine for views
-   **CSS** – Styles for design and layout

## 📂 Installation & Setup

1. Clone the repository:

    ```bash
    git clone https://github.com/jlyngfelt/Brie_Liant.git
    cd Brie_Liant
    ```

2. Install dependencies:

    ```bash
    composer install
    npm install
    ```

3. Copy the environment file:

    ```bash
    cp .env.example .env
    ```

4. Update the `.env` file and set the locale to Swedish:

    ```
    APP_LOCALE=sv
    ```

5. Generate the application key:

    ```bash
    php artisan key:generate
    ```

6. Run database migrations and seed the database:

    ```bash
    php artisan migrate --seed
    ```

7. Start the development server:

    ```bash
    php artisan serve
    ```

8. Compile frontend assets:
    ```bash
    npm run dev
    ```

## ⚠️ Important Notes

-   This project is designed specifically for **desktop** and is not optimized for mobile devices.
-   Make sure to set `APP_LOCALE=sv` in your `.env` file to enable proper language support.

## 👨‍💻 Team

-   [@jlyngfelt](https://github.com/jlyngfelt)
-   [@johan-hagman](https://github.com/johan-hagman)

## 📬 Feedback & Contact

We welcome feedback and suggestions! Feel free to open an issue or submit a pull request if you have any improvements or ideas.

Thank you for trying out Brie_Liant – where cheese and technology melt together perfectly! 🧀✨
