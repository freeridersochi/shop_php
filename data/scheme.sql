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
VALUES (1 , LOAD_FILE('../img/snowboards/1_1.jpg'), 
            LOAD_FILE('../img/snowboards/1_2.jpg'), 
            LOAD_FILE('../img/snowboards/1_3.jpg'),
            LOAD_FILE('../img/snowboards/1_4.jpg')
        ),
       (2 , LOAD_FILE('../img/snowboards/2_1.jpg')
        );

CREATE TABLE marks (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name CHAR(10) NOT NULL UNIQUE
);

INSERT INTO marks (name) 
VALUES  ('hot'),
        ('sale'),
        ('new');

CREATE TABLE categories (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VALUES(10) NOT NULL UNIQUE
);

INSERT INTO categories (name)
VALUES  ('сноуборды'),
        ('вейкборды'),
        ('лонгборды'),
        ('самокаты');
        
CREATE TABLE products(
    id INT UNSIGNED PRIMARY KEY,
    name TEXT(20) NOT NULL UNIQUE,
    price INT(10),
    quanity INT(10),
    description TEXT(100),
    size TEXT(5),
    discount DOUBLE(3,2)   
    mark INT references marks(id),
    photo INT references photos(id),
    category INT references categories(id)  
);

INSERT INTO products (id,
                      name,
                      price,
                      quanity,
                      description,
                      size,
                      discount,
                      mark,
                      photo,
                      category)
VALUES ( 1 , 
        'СНОУБОРД BURTON GENIE (13-14)',
        '12 456 руб',
        10 ,
        'Genie - модель в линейке досок для девушек, которые только начинают осваивать сноубординг. Её можно описать фразой, что   нет ничего плохого в том, чтобы быть проще! В этой доске собрано всё необходимое для того чтобы быстро и безопасно       освоить снежную доску! 
         Система закладных 3D. 
         Форма - Easy Rider. 
         Сердечник - Women"s Specific True Flex Fly. 
         Стекловолокно - Biax. 
         Жёсткость - Twin.',
        150 ,
        NULL ,
        0 ,
        1 ,
        1
       ),
       ( 2,
         'Сноуборд BURTON BARRACUDA FW15',
         '29 740 РУБ',
         'Барракуда - это рыба обитающая в тропических водах мирового океана. Среда обитания, где Барракуды обычно охотятся -       заросли, камни и скалы. Именно в таких условиях, конечно, не в мировом океане, обитают настоящие любители фрирайда.     Будь-  то лес, скалистая альпика или просто свежий паудер рядом с трассой - Barracuda справится со всем! Отличный       фрирайд   снаряд, позволяющий получить максимальное удовольствие от катания.
          Назначение: groomers + backcountry
          Жесткость: средняя 
          Прогиб: S-Rocker
          Система закладных ICS. 
          Форма 15 мм Taper. 
          Сердечник - Super Fly ll с Dualzone EGD, 
          Вставки из карбона Carbon I-Beam. 
          Frostbite Edges - канты в зоне креплений на пол-миллиметра шире, для невероятного контроля, даже на ледяной поверхности.   При этом общая жесткость доски остается неизменной, 
          Pro-tip - заостренный хвост для лучшей маневренности в глубоком снегу и более низкого веса 
          Infinite Ride - эксклюзивная технология от Burton, которая позволяет повысить щелчок и прочность доски',
         162 ,
         0.3 ,
         1 ,
         2 ,
         1
       );
       
