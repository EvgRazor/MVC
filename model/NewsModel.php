<?php

class NewsModel {
   
    public static function getAllNews() {
        
        $db = Db::get_db_connect();
        
        $rezult = $db->query("SELECT id, Category, Date, Short_content, Text, Avtor FROM mvc_news");
        
        $arr_table_mvc_news = [];
        $i = 0;
        
        while ($row = $rezult->fetch(PDO::FETCH_ASSOC)) {
            $arr_table_mvc_news [$i]['id'] = $row['id'];
            $arr_table_mvc_news [$i]['Category'] = $row['Category'];
            $arr_table_mvc_news [$i]['Date'] = $row['Date'];
            $arr_table_mvc_news [$i]['Short_content'] = $row['Short_content'];
            $arr_table_mvc_news [$i]['Text'] = $row['Text'];
            $arr_table_mvc_news [$i]['Avtor'] = $row['Avtor'];
            $i++;
        }
        
        return $arr_table_mvc_news;
        
    }

    public static function getCategorNews() {
        
        $db = Db::get_db_connect();
        
        $rezult = $db->query("SELECT Category FROM mvc_news");
        
        $arr_table_mvc_news = [];
        $i = 0;
        
        while ($row = $rezult->fetch(PDO::FETCH_ASSOC)) {
            $arr_table_mvc_news [$i]['Category'] = $row['Category'];
            $i++;
        }
        
        return $arr_table_mvc_news;
        
    }
    
    public static function getRubricaidNes($rubrica, $id) {
        
        $db = Db::get_db_connect();
        
        
        $rezult = $db->query("SELECT id, Category, Date, Short_content, Text, Avtor FROM mvc_news WHERE Category = '$rubrica' AND id = '$id' ");

        $arr_table_mvc_news = [];
        $i = 0;
        
        while ($row = $rezult->fetch(PDO::FETCH_ASSOC)) {
            $arr_table_mvc_news ['id'] = $row['id'];
            $arr_table_mvc_news ['Category'] = $row['Category'];
            $arr_table_mvc_news ['Date'] = $row['Date'];
            $arr_table_mvc_news ['Short_content'] = $row['Short_content'];
            $arr_table_mvc_news ['Text'] = $row['Text'];
            $arr_table_mvc_news ['Avtor'] = $row['Avtor'];
        }
        
        return $arr_table_mvc_news;
        
    }
    
}
