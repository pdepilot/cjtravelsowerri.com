<?php

use App\Core\Router;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\Customer as Customer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| Routes are loaded by the App and assigned to the Controller actions.
|
*/

// Public Routes
Router::get('/', [HomeController::class, 'index'])->name('home');
Router::get('/about', [HomeController::class, 'about'])->name('about');
Router::get('/contact', [HomeController::class, 'contact'])->name('contact');
Router::get('/destinations', [HomeController::class, 'destinations'])->name('destinations');
Router::get('/financing', [HomeController::class, 'financing'])->name('financing');
Router::get('/flights', [FlightController::class, 'index'])->name('flights');
Router::get('/flights/{id}', [FlightController::class, 'show'])->name('flights.show');
Router::get('/hotels', [HotelController::class, 'index'])->name('hotels');
Router::get('/hotels/{id}', [HotelController::class, 'show'])->name('hotels.show');

// Authentication Routes
Router::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Router::post('/login', [LoginController::class, 'login']);
Router::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Router::post('/register', [RegisterController::class, 'register']);
Router::any('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin Routes
Router::get('/admin', function () {
    return redirect('/admin/dashboard');
});
Router::get('/admin/dashboard', [Admin\DashboardController::class, 'index'])->name('admin.dashboard');
Router::get('/admin/customers', [Admin\CustomerController::class, 'index'])->name('admin.customers');
Router::get('/admin/flights', [Admin\FlightController::class, 'index'])->name('admin.flights');
Router::get('/admin/hotels', [Admin\HotelController::class, 'index'])->name('admin.hotels');
Router::get('/admin/loans', [Admin\LoanController::class, 'index'])->name('admin.loans');
Router::get('/admin/destinations', [Admin\DestinationController::class, 'index'])->name('admin.destinations');
Router::get('/admin/transactions', [Admin\TransactionController::class, 'index'])->name('admin.transactions');
Router::get('/admin/api', [Admin\ApiController::class, 'index'])->name('admin.api');
Router::get('/admin/reports', [Admin\ReportController::class, 'index'])->name('admin.reports');
Router::get('/admin/settings', [Admin\SettingController::class, 'index'])->name('admin.settings');

// Customer Routes
Router::get('/customer', function () {
    return redirect('/customer/dashboard');
});
Router::get('/customer/dashboard', [Customer\DashboardController::class, 'index'])->name('customer.dashboard');
Router::get('/customer/overview', [Customer\DashboardController::class, 'index'])->name('customer.overview');
Router::get('/customer/flights', [Customer\FlightController::class, 'index'])->name('customer.flights');
Router::get('/customer/hotels', [Customer\HotelController::class, 'index'])->name('customer.hotels');
Router::get('/customer/financing', [Customer\FinancingController::class, 'index'])->name('customer.financing');
Router::get('/customer/payments', [Customer\PaymentController::class, 'index'])->name('customer.payments');
Router::get('/customer/profile', [Customer\ProfileController::class, 'index'])->name('customer.profile');
Router::get('/customer/settings', [Customer\SettingController::class, 'index'])->name('customer.settings');

// Legacy .html redirects for backward compatibility
Router::get('/index.html', fn() => redirect('/'));
Router::get('/about.html', fn() => redirect('/about'));
Router::get('/contact.html', fn() => redirect('/contact'));
Router::get('/destinations.html', fn() => redirect('/destinations'));
Router::get('/financing.html', fn() => redirect('/financing'));
Router::get('/flights.html', fn() => redirect('/flights'));
Router::get('/hotels.html', fn() => redirect('/hotels'));
Router::get('/login.html', fn() => redirect('/login'));
Router::get('/register.html', fn() => redirect('/register'));

Router::get('/admin/dashboard.html', fn() => redirect('/admin/dashboard'));
Router::get('/admin/customers.html', fn() => redirect('/admin/customers'));
Router::get('/admin/flights.html', fn() => redirect('/admin/flights'));
Router::get('/admin/hotels.html', fn() => redirect('/admin/hotels'));
Router::get('/admin/loans.html', fn() => redirect('/admin/loans'));
Router::get('/admin/destinations.html', fn() => redirect('/admin/destinations'));
Router::get('/admin/transactions.html', fn() => redirect('/admin/transactions'));
Router::get('/admin/api.html', fn() => redirect('/admin/api'));
Router::get('/admin/reports.html', fn() => redirect('/admin/reports'));
Router::get('/admin/settings.html', fn() => redirect('/admin/settings'));

Router::get('/customer/dashboard.html', fn() => redirect('/customer/dashboard'));
Router::get('/customer/overview.html', fn() => redirect('/customer/dashboard'));
Router::get('/customer/flights.html', fn() => redirect('/customer/flights'));
Router::get('/customer/hotels.html', fn() => redirect('/customer/hotels'));
Router::get('/customer/financing.html', fn() => redirect('/customer/financing'));
Router::get('/customer/payments.html', fn() => redirect('/customer/payments'));
Router::get('/customer/profile.html', fn() => redirect('/customer/profile'));
Router::get('/customer/settings.html', fn() => redirect('/customer/settings'));

