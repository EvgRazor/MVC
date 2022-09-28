<?php
/*
 Данный класс принимает ссылку, что ввел клиент и обрабатывает ее, 
 определяя какой контроллер и какая функция будет обрабатывать ее.  
 */
 
class Router {
    
    private $routes_arr;

    # иницилизируем нашу переменную $routes_arr
    public function __construct() {
        $this->routes_arr = include_once ROOT.'/routes/routes.php';
    }
    
    # функция принимает и обрабатывает URL 
    private function getUrl() {
        $url = $_SERVER['REQUEST_URI'];
        $url = str_replace('mvc_go', '', $url); 
        $url = trim($url, '/');
        return $url;
    }
    
    # Массив с уникальными роутами до "/" 
    private function get_arr_routes() {
      $massRoutes = $this->routes_arr;
      $massUrl = [];

        foreach ($massRoutes as $key => $value) {
           $str = explode("/", $key);
           $str = array_shift ($str);
           if (!in_array($str, $massUrl)) $massUrl [] = $str;           
        }
        return $massUrl;
    }
    
    # проверяем, еслть ли такой раздел сайта первой вложенности.
    private function get_boolean_url_routes ($url) {
        $url = explode("/", $url);
        $url = array_shift ($url);
        
        if (in_array($url, $this->get_arr_routes()))
            return true;
            return false;
    }


    # функция обрабатывает ссылку и переключает на нужный контроллер (класс) и метод 
    public function run() {
        $url = $this->getUrl();
       
        # получаем bool  есть такая первая вложенность или нет
        $rez =  $this->get_boolean_url_routes($url);

        if ($rez) {
            # перебираем наши routes и ищем совпадение
                foreach ($this->routes_arr as $key => $value) {

                    # функция preg_match ищет совпадение с нашими роутами, функция preg_replace подставляет данные вместо $1 b $2., см routes.php
                    if (preg_match("~$key~", $url)) {
                    //echo "<br> Где ищем (запрос который набрал пользователь) $url";
                    //echo "<br> Что ищем (совпадение из правил) $kay";
                    //echo "<br> Кто обрабатывает (совпадение из правил) $value";   
                    $internalRoute = preg_replace("~$key~", $value, $url);  

                    # разбиваем нашу строку в массив, разбивка по значению "/"
                    $str_arr_url = explode("/", $internalRoute);

                    # создаем контроллер и метод который будет обрабатывать нашу ссылку
                    $name_сontroller_сlass = ucfirst(array_shift($str_arr_url))."Controller";
                    $name_metod_controller = "Action".ucfirst(array_shift($str_arr_url));

                    echo "Класс : $name_сontroller_сlass<br>";
                    echo "Метод : $name_metod_controller<br>";

                    # подключаем нужный контроллер и метод
                    include_once ROOT."/controller/{$name_сontroller_сlass}.php";
                    $obj_controller = new $name_сontroller_сlass();    
                    $obj_controller->$name_metod_controller($str_arr_url);

                    break;

                    } 
                }
            } else {
                include_once ROOT.'/controller/ErrorController.php';
                
                echo "Ошибка 404";
        }
    }
}
