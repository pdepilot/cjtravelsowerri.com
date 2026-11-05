# Travelbookings — Core PHP (Laravel Architecture)

A luxury travel agency web application built with **Core PHP** (no external framework or Composer dependencies required) structured in the classic **Laravel MVC Architecture**.

---

## 🚀 Quick Start

Run the built-in development server using the Artisan CLI:

```bash
php artisan serve
```

Or run via PHP's built-in server directly:

```bash
php -S 127.0.0.1:8000 server.php
```

Then visit:
- **Public Site**: [http://127.0.0.1:8000](http://127.0.0.1:8000)
- **Customer Dashboard**: [http://127.0.0.1:8000/customer/dashboard](http://127.0.0.1:8000/customer/dashboard)
- **Admin Console**: [http://127.0.0.1:8000/admin/dashboard](http://127.0.0.1:8000/admin/dashboard)

---

## 🧭 Artisan CLI Commands

| Command | Description |
| :--- | :--- |
| `php artisan serve` | Starts the PHP development server on `127.0.0.1:8000` |
| `php artisan route:list` | Displays a formatted table of all 60+ registered application routes |
| `php artisan --version` | Displays the framework version |

---

## 📁 Directory Structure

```
TravelBooking/
├── app/
│   ├── Core/                           # Core MVC Engine
│   │   ├── App.php                     # Application coordinator & container
│   │   ├── Autoloader.php              # PSR-4 Autoloader (maps App\ to app/)
│   │   ├── Request.php                 # HTTP Request wrapper (methods, uri, inputs)
│   │   ├── Response.php                # HTTP Response wrapper (headers, json, redirect)
│   │   ├── Router.php                  # Laravel-like Router with named routes & params
│   │   ├── Session.php                 # Session management & CSRF token handler
│   │   ├── View.php                    # Pure PHP template renderer with layout inheritance
│   │   └── helpers.php                 # view(), route(), asset(), redirect(), csrf_field()
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Controller.php          # Base Controller
│   │   │   ├── HomeController.php      # Public pages (home, about, contact, destinations, financing)
│   │   │   ├── FlightController.php    # Flights search & detail
│   │   │   ├── HotelController.php     # Hotels search & detail
│   │   │   ├── Admin/                  # 10 Admin controllers (Dashboard, Customers, Flights, etc.)
│   │   │   ├── Customer/               # 7 Customer controllers (Dashboard, Flights, Hotels, etc.)
│   │   │   └── Auth/                   # Login & Register controllers
│   │   └── Middleware/
│   └── Models/                         # Data models (Flight, Hotel, User, LoanEnquiry, Transaction)
├── bootstrap/
│   └── app.php                         # Application initialization & bootstrapping
├── config/
│   ├── app.php                         # App configuration (name, timezone, debug)
│   └── database.php                    # Database configuration (SQLite / MySQL)
├── database/
│   └── migrations/                     # SQL schema migration files
├── public/                             # Public Web Document Root
│   ├── index.php                       # Single front controller
│   ├── .htaccess                       # Apache URL rewrite rules
│   ├── css/                            # Public styles (admin.css, customer.css, style.css, responsive.css)
│   └── js/                             # Public scripts (admin.js, customer.js, main.js)
├── resources/
│   └── views/
│       ├── layouts/                    # Master layouts (app.php, admin.php, customer.php)
│       ├── partials/                   # Reusable components (sidebars, topbar, navbar, footer, modals)
│       ├── pages/                      # Public page views (home, about, contact, flights, etc.)
│       ├── admin/                      # Admin views (dashboard, customers, flights, hotels, etc.)
│       └── customer/                   # Customer views (dashboard, flights, hotels, financing, etc.)
├── routes/
│   ├── web.php                         # All web route declarations with route names
│   └── api.php                         # JSON API endpoints
├── storage/                            # Cache, logs, and compiled views
├── legacy_html/                        # Preserved static HTML files backup
├── artisan                             # CLI tool (php artisan serve, php artisan route:list)
├── composer.json                       # PSR-4 autoloading definitions
└── server.php                          # Built-in PHP development server router
```

---

## 🎨 Architectural Features

1. **Expanding Sidebar Navigation**:
   - Both Admin and Customer dashboards feature floating sidebars that smoothly expand on hover from a sleek ~60px icon rail to a `250px` navigation panel displaying labels, badges, and active state indicators via `routeIs()`.

2. **Zero External Dependencies**:
   - Runs on standard PHP 8.2+ with pure Core PHP. No `composer install` or `node_modules` required to run the backend.

3. **Master Layout Inheritance**:
   - Views declare their parent layout cleanly:
     ```php
     <?php $this->layout('layouts/admin', ['title' => 'Dashboard']); ?>
     ```
   - Partial inclusion:
     ```php
     <?php $this->include('partials/admin-sidebar'); ?>
     ```
   - Laravel-style helpers:
     ```php
     <?= route('admin.flights') ?>
     <?= asset('css/admin.css') ?>
     <?= csrf_field() ?>
     ```

