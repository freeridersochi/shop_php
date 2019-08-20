DROP DATABASE IF EXISTS main_db;

CREATE DATABASE main_db
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE main_db;

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
    #sizes from table Sizes 
    discount DOUBLE(3,2) DEFAULT 1.0 NOT NULL,
    mark INT references marks(id) ON DELETE RESTRICT,
    category INT references categories(id) ON DELETE RESTRICT 
);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    email CHAR(255) NOT NULL,
    password CHAR(255) NOT NULL,
    phone CHAR(255) NULL,
    username CHAR(255) NOT NULL,
    userfamily CHAR(255) NOT NULL,
    usercity CHAR(255) NOT NULL,
    usersrteet CHAR(255) NOT NULL,
    userhome CHAR(255) NOT NULL,
    userappartments CHAR(255) NOT NULL
);
