<?php

class Db {
    
    public static function get_db_connect( ) {
        
     $host = 'localhost';
     $db_name = 'mvc_db';
     $name = "root";
     $pass = "";

     $db = new PDO("mysql:host=$host; dbname=$db_name; charset=utf8", $name, $pass);
     
     return $db;
     
    }
    
    
}