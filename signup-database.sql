-- SQL to create a database and users table for OrnaLuxe
CREATE DATABASE IF NOT EXISTS ornaluxe_db;
USE ornaluxe_db;

-- Users table to store sign up/login information
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  mobile VARCHAR(15) NOT NULL,
  address TEXT NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
