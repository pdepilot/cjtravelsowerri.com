-- Travelbookings Database Schema (SQLite / MySQL Compatible)

CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(255) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    phone VARCHAR(50) NULL,
    country VARCHAR(100) DEFAULT 'Nigeria',
    city VARCHAR(100) DEFAULT 'Lagos',
    role VARCHAR(50) DEFAULT 'customer',
    tier VARCHAR(50) DEFAULT 'Gold member',
    passport_number VARCHAR(100) NULL,
    passport_expiry DATE NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS flights (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ref VARCHAR(50) UNIQUE NOT NULL,
    airline VARCHAR(100) NOT NULL,
    flight_no VARCHAR(50) NOT NULL,
    origin VARCHAR(100) NOT NULL,
    destination VARCHAR(100) NOT NULL,
    departure_date DATE NOT NULL,
    departure_time VARCHAR(20) NOT NULL,
    arrival_time VARCHAR(20) NOT NULL,
    duration VARCHAR(50) NOT NULL,
    stops VARCHAR(50) DEFAULT 'Direct',
    cabin VARCHAR(50) DEFAULT 'Economy',
    price DECIMAL(12, 2) NOT NULL,
    status VARCHAR(50) DEFAULT 'Confirmed',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS hotels (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ref VARCHAR(50) UNIQUE NOT NULL,
    property VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    checkin DATE NOT NULL,
    checkout DATE NOT NULL,
    nights INTEGER NOT NULL DEFAULT 1,
    guests VARCHAR(50) DEFAULT '2 guests',
    room_type VARCHAR(100) NOT NULL,
    price DECIMAL(12, 2) NOT NULL,
    status VARCHAR(50) DEFAULT 'Confirmed',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS loan_enquiries (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ref VARCHAR(50) UNIQUE NOT NULL,
    user_id INTEGER NULL,
    amount DECIMAL(12, 2) NOT NULL,
    period VARCHAR(50) NOT NULL,
    purpose VARCHAR(255) NOT NULL,
    status VARCHAR(50) DEFAULT 'In review',
    note TEXT NULL,
    submitted DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS transactions (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ref VARCHAR(50) UNIQUE NOT NULL,
    user_id INTEGER NULL,
    related_ref VARCHAR(50) NULL,
    method VARCHAR(100) NOT NULL,
    amount DECIMAL(12, 2) NOT NULL,
    status VARCHAR(50) DEFAULT 'Paid',
    transacted_at DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

