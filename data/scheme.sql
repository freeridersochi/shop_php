DROP DATABASE IF EXISTS shop_main_db;

CREATE DATABASE IF NOT EXISTS shop_main_db
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE shop_main_db;

CREATE TABLE photos (
    id INT UNSIGNED PRIMARY KEY,
    data MEDIUMBLOB NOT NULL 
);

INSERT INTO photos ( id, data )
VALUES (0 , LOAD_FILE('../img/snowboards/1_1.jpg'), 
            LOAD_FILE('../img/snowboards/1_2.jpg'), 
            LOAD_FILE('../img/snowboards/1_3.jpg'),
            LOAD_FILE('../img/snowboards/1_4.jpg')
        );

CREATE TABLE marks (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name CHAR(10) NOT NULL UNIQUE
);

INSERT INTO marks (name) 
VALUES  ('hot'),
        ('sale'),
        ('new');
        
CREATE TABLE products(
    id INT UNSIGNED PRIMARY KEY,
    name TEXT(20) NOT NULL UNIQUE,
    price INT(10),
    quanity INT(10),
    description TEXT(100),
    size TEXT(5),
    discount DOUBLE(3,2)
 
/*    
    mark(),
    photo(),
    category()
*/
    
);