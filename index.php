<?php

# Общие настройки сайта
ini_set('display_errors', 1); // Включаем вывод ошибок 
ini_set('error_reporting', E_ALL); // Выводим все ошибки


# Подключение основных файлов системы
define("ROOT", dirname(__FILE__)); // В константу помещаем путь к корню сайта
include_once ROOT.'/router/Router.php';


# Подключение БД
include_once ROOT.'/db/Db.php';


# Подключение класса Router
$router = new Router();
$router->run();


echo "<hr>";
echo "Страница FRONT CONTROLLER";