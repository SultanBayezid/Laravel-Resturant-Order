
# Restaurant App Built with Laravel

## Overview

This Laravel-based Restaurant App provides a seamless platform for both restaurant administrators and customers. The system is designed to streamline the process of managing menus, handling orders, and enhancing the overall user experience.

## Features

### 1. User Roles

- **Admin:**
  - Accessible through secure login.
  - Has the authority to add and manage menus.
  - Can add menu items under various categories.
  - Manages customer data.
  - Monitors and processes orders.

- **Customer:**
  - Registers and logs in to the system.
  - Browses available menus and menu items.
  - Adds selected items to the cart.
  - Manages the cart contents.
  - Places and tracks orders.

### 2. Menu Management

- **Admin:**
  - Creates and updates restaurant menus.
  - Adds and modifies menu items with details such as name, description, and price.

### 3. Customer Order Workflow

- **Customer:**
  - Visits the website and logs in.
  - Navigates through menus and selects desired items.
  - Adds items to the cart.
  - Manages the cart contents, updating quantities if needed.
  - Places an order and receives order confirmation.

### 4. Order Management

- **Admin:**
  - Receives and processes customer orders.
  - Updates order status (e.g., preparing, dispatched).
  - Manages order history.

## How to Use

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/SultanBayezid/restaurant-app.git
   ```

2. **Install Dependencies:**
   ```bash
   composer install
   ```

3. **Configure Database:**
   - Copy the `.env.example` file to `.env` and configure your database settings.
   - Run migrations and seed the database:
     ```bash
     php artisan migrate --seed
     ```

4. **Run the Application:**
   ```bash
   php artisan serve
   ```

5. **Access the Application:**
   Open your browser and go to `http://localhost:8000` (or the specified port).

## Technologies Used

- **Laravel:** The PHP framework used for building the backend of the application.
- **MySQL:** Database management system for storing and retrieving data.

## Contributing

If you'd like to contribute to the project, feel free to open an issue or submit a pull request. Your contributions are highly appreciated!

