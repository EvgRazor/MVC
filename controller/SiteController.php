<?php

 
class SiteController {
     
    # функция выводит главную страницу сайта
    public function ActionIndex() {
        
        include_once ROOT.'/view/site/index.php';
        
    }
    
}
