<?php

defined('ISHOP') or die('Access denied'); 

// домен
define('PATH', 'http://ishop/');

// модель
define('MODEL', 'model/model.php');

// контроллер
define('CONTROLLER', 'controller/controller.php');

// вид
define('VIEW', 'views/');

// активный шаблон
define('TEMPLATE', VIEW.'ishop/');

// максимально допустимый вес загружаемых картинок - 1 Мб
define('SIZE', 1048576);

//папка з картинками, які не відносядся до картмнок оформлення(картинки товарів)
define('PRODUCTIMG', PATH.'userfiles/product_img/baseimg/');

// папка с картинками галереи
define('GALLERYIMG', PATH.'userfiles/product_img/');

// сервер БД
define('HOST', 'localhost');
//define('HOST', 'mysql.hostinger.ru');

// пользователь
define('USER', 'ishop_user');
//define('USER', 'u241226796_user');

// пароль
define('PASS', '2824uz.1993ls.z');

// БД
define('DB', 'ishop');
//define('DB', 'u241226796_ishop');

// название магазина - title
define('TITLE', 'Інтернет-магазин комп\'ютерної техніки');

// email адміністратора
define('ADMIN_EMAIL', 'anmin@ishop.com');

//кількість товарів на сторінці
define('PERPAGE', 9);

// папка шаблонів адміністивної частини
define('ADMIN_TEMPLATE', 'templates/');

mysql_connect(HOST, USER, PASS) or die('No connect to Server'); //підключаємся до серверу БД ��
mysql_select_db(DB) or die('No connect to DB');//вибираємо для роботи БД
mysql_query("SET NAMES 'UTF8'") or die('Cant set charset');// задаємо кодіровку для зєднання
?>