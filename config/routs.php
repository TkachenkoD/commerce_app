<?php 
/**
 * this in request string    =>  where request is procedured
 * 'news/category/id_of_news => controller/actionOfController/parameters'
 * exp(row 8 see below)  news/art/11 => NewsController/actionView/art/11
 */
return array(
    // 'news/([a-z]+)/([0-9]+)' => 'news/viewBla/$1/$2',
    
    'products/([0-9]+)' => 'products/view/$1',
    'products/category/([0-9]+)/page-([0-9]+)' => 'products/view_category/$1/$2', //productController and actionViewcategory
    'products/category/([0-9]+)' => 'products/view_category/$1', //productController and actionViewcategory
    'products/page-([0-9]+)' => 'products/list/$1', 
    'products' => 'products/list', 
    'user/register' => 'user/register', 
    'user/login' => 'user/login', 
    'user/logout' => 'user/logout', 
    'profile/edit' => 'profile/edit', 
    'profile' => 'profile/index', 
    'test/test_fetching/([a-zA-Z]+)' => 'test/test_fetching/$1', 
    '' => 'site/index',
    // 'news' => 'news/indexBla',
);