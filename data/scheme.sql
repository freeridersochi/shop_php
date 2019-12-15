DROP DATABASE IF EXISTS u0823185_test_db;

CREATE DATABASE u0823185_test_db
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE u0823185_test_db;

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
    quantity INT,
    description MEDIUMTEXT,
    discount DOUBLE(3,2) DEFAULT 1.0 NOT NULL,
    mark INT references marks(id) ON DELETE RESTRICT,
    category INT references categories(id) ON DELETE RESTRICT 
);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name CHAR(255) NOT NULL,
    email CHAR(255) NOT NULL UNIQUE,
    password BINARY(64) NOT NULL,
    phone CHAR(255),
    city CHAR(255),
    street CHAR(255),
    home CHAR(255),
    appartments INT,
    user_orders CHAR(255)
);

CREATE TABLE orders(
    id INT PRIMARY KEY AUTO_INCREMENT,
    owner_id INT references users(id) ON DELETE CASCADE,
    status CHAR(255),
    created_at TIMESTAMP DEFAULT NOW() NOT NULL   
);

CREATE TABLE ordered_products(
    id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT references orders(id) ON DELETE RESTRICT,
    quantity INT,
    size_id INT references sizes(id) ON DELETE RESTRICT,
    product_id INT references products(id) ON DELETE RESTRICT
);
