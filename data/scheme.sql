DROP DATABASE IF EXISTS shop_main_db;

CREATE DATABASE IF NOT EXISTS shop_main_db
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE shop_main_db;

CREATE TABLE photos (
    id INT UNSIGNED PRIMARY KEY,
    data MEDIUMBLOB NOT NULL 
);

CREATE TABLE marks (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name CHAR(10) NOT NULL UNIQUE
);

insert into marks (name) values('hot'),('sale'),('new');