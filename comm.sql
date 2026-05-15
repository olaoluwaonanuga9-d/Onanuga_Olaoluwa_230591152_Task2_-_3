--I used xampp so this is just to show my database
CREATE DATABASE login_system;

USE login_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(255)
);