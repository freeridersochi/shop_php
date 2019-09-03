DROP DATABASE IF EXISTS shop_db;

CREATE DATABASE shop_db
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE shop_db;

CREATE TABLE sizes (
    id INT UNSIGNED PRIMARY KEY,
    product_id INT references products(id) ON DELETE CASCADE,
    size CHAR(100) NOT NULL     
);

CREATE TABLE marks (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name CHAR(10) NOT NULL UNIQUE
);

CREATE TABLE categories (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name CHAR(255) NOT NULL UNIQUE,
    alias CHAR(255) NOT NULL UNIQUE,
    banner CHAR(255) NOT NULL,
    description MEDIUMTEXT
);
       
CREATE TABLE products(
    id INT UNSIGNED PRIMARY KEY,
    name CHAR(255) NOT NULL UNIQUE,
    price INT,
    main_photo CHAR(255) NOT NULL,
    photo1 CHAR(255),
    photo2 CHAR(255),
    photo3 CHAR(255),
    quanity INT,
    description MEDIUMTEXT,
    discount DOUBLE(3,2) DEFAULT 1.0 NOT NULL,
    mark INT references marks(id) ON DELETE RESTRICT,
    category INT references categories(id) ON DELETE RESTRICT 
);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name CHAR(255) NOT NULL,
    email CHAR(255) NOT NULL UNIQUE,
    password BINARY(64) NOT NULL
);
