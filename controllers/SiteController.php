<?php 

include_once ROOT."/models/Category.php";
include_once ROOT."/models/User.php";

Class SiteController{

    public function actionIndex(){
        $listCategories = Category::getCategoryList(); //get list of categories for ul
        require_once(ROOT."/views/site/index.php");
    }

}