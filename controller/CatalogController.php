<?php


class CatalogController {
    
    # выводим все разделы
    public function ActionAll() {
        
        echo "Метод ActionAll";
        
    }
    
    # выводим весь каталог
    public function ActionСategorycatalog() {
        
        echo "Метод ActionСategorycatalog";
        
    }
    
    # выводим конкрутный товар/id
    public function ActionRazdelid($str_arr_url) {
        
        $rubrica = $str_arr_url[0];
        $id = $str_arr_url[1];
        echo " rubrica = $rubrica <br>id = $id";
 
        
    }
    
}
