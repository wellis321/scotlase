-- Scotlase Solutions - Database Schema
-- Run with: mysql -u root -p scotlase < schema.sql

CREATE DATABASE IF NOT EXISTS scotlase CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE scotlase;

CREATE TABLE IF NOT EXISTS contact_submissions (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_created_at (created_at)
);
