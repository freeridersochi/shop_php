DROP DATABASE IF EXISTS shop_main_db;

CREATE DATABASE shop_main_db
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE shop_main_db;

CREATE TABLE photos (
    id INT UNSIGNED PRIMARY KEY,
    product_id INT references products(id) ON DELETE CASCADE,
    url CHAR(100) NOT NULL    
);

CREATE TABLE marks (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name CHAR(10) NOT NULL UNIQUE
);

CREATE TABLE categories (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name CHAR(255) NOT NULL UNIQUE
);
       
CREATE TABLE products(
    id INT UNSIGNED PRIMARY KEY,
    name CHAR(255) NOT NULL UNIQUE,
    price INT,
    quanity INT,
    description MEDIUMTEXT,
    size CHAR(10),
    discount DOUBLE(3,2),
    mark INT references marks(id) ON DELETE RESTRICT,
    category INT references categories(id) ON DELETE RESTRICT 
);

       
