<?php
include_once ROOT.'/model/NewsModel.php';
 
class NewsController {
    
    # выводим все новости
    public function ActionAll() {
        
       $arr_table_mvc_news = NewsModel::getAllNews();
       
       include_once ROOT.'/view/news/news.php'; // подключаем страницу, где будет код html и на ней выводим наши новости
       
    }
    
    # выводим все категории новостей
    public function ActionCategorynews() {
        
       $arr_table_mvc_news = NewsModel::getCategorNews();
       
       include_once ROOT.'/view/news/categor.php'; // подключаем страницу, где будет код html и на ней выводим наши данные
    }
    
    # выводим конкретную новость (рубрика/новость)
    public function ActionRubricaid($str_arr_url) {
        
        $rubrica = $str_arr_url[0];
        $id = $str_arr_url[1];
        
        $arr_table_mvc_news = NewsModel::getRubricaidNes($rubrica, $id);


        include_once ROOT.'/view/news/cat_id_news.php'; // подключаем страницу, где будет код html и на ней выводим наши данные
        
        
    }
    
}
