DELETE FROM photos; 
DELETE FROM marks;
DELETE FROM categories;
DELETE FROM products;

# photos
INSERT INTO photos ( id, product_id, url )
VALUES (1, 1, '../img/snowboards/1_1.jpg'), 
       (2, 1, '../img/snowboards/1_2.jpg'), 
       (3, 1, '../img/snowboards/1_3.jpg'),
       (4, 1, '../img/snowboards/1_4.jpg'),
       (5, 2, '../img/snowboards/2_1.jpg');

#marks
INSERT INTO marks (name) 
VALUES  ('hot'),
        ('sale'),
        ('new');

#categories
INSERT INTO categories (name)
VALUES  ('сноуборды'),
        ('вейкборды'),
        ('лонгборды'),
        ('самокаты');
 
 
INSERT INTO products (id,
                      name,
                      price,
                      quanity,
                      description,
                      size,
                      discount,
                      mark,
                      category)
VALUES ( 1 , 
        'СНОУБОРД BURTON GENIE (13-14)',
        12456,
        10 ,
        'Genie - модель в линейке досок для девушек, которые только начинают осваивать сноубординг. Её можно описать фразой, что   нет ничего плохого в том, чтобы быть проще! В этой доске собрано всё необходимое для того чтобы быстро и безопасно       освоить снежную доску! 
         Система закладных 3D. 
         Форма - Easy Rider. 
         Сердечник - Women"s Specific True Flex Fly. 
         Стекловолокно - Biax. 
         Жёсткость - Twin.',
        150 ,
        NULL ,
        1 , 
        1
       ),
       ( 2,
         'Сноуборд BURTON BARRACUDA FW15',
         29740,
        5,
         'Genie - модель в линейке досок для девушек, которые только начинают осваивать сноубординг. Её можно описать фразой, что   нет ничего плохого в том, чтобы быть проще! В этой доске собрано всё необходимое для того чтобы быстро и безопасно       освоить снежную доску! 
         Система закладных 3D. 
         Форма - Easy Rider. 
         Сердечник - Women"s Specific True Flex Fly. 
         Стекловолокно - Biax. 
         Жёсткость - Twin.',
         162 ,
         0.3 ,
         2 ,
         1
       );