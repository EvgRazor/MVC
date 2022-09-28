<?php

return $routes_arr = 
        [
            'news/([a-z]+)/([0-9]+)'=>'news/rubricaid/$1/$2',
            'news/([a-z]+)'=>'news/categorynews',
            'news'=>'news/all',
            
            'catalog/([a-z]+)/([0-9]+)'=>'catalog/razdelid/$1/$2',
            'catalog/([a-z]+)'=>'catalog/categorycatalog',
            'catalog'=>'catalog/all',
            
            ''=>'site/index' 
        ];

/*
 Данный файл хранит массив маршрутов (ссылок), 
 ключ - это то, что вводит юзер, 
 значение - это то, что будет отрабатывать данную ссылку
 */