<?php 
include 'models/News.php';
Class NewsController{

/**
 * action method of class NewsController
 * shows list of all news 
 */
public function actionIndexBla(){
    $xx = [];
    $xx = News::getNewsList();

    require_once(ROOT."/views/index.php");

    // echo "<pre>";
    // print_r($xx);
    // echo "</pre>";
    return true;
}


/**
 * action method of class NewsController
 * shows the only one news 
 * 
 * parameters from Router.php are sent as variables
 * 
 * calls static method of "model" class News.php
 */
public function actionViewBla($category, $idOfNews){

    $cc = News::getNewsById($idOfNews);
    require_once(ROOT."/views/view.php");
    // echo "<br>";
    // echo "<pre>";
    // print_r($cc);
    // echo "</pre>";
    
    // echo "the only one news in ".$category." is shown,";
    // echo "<br>";
    // print_r(" its number__".$idOfNews);
    return true;
}

}