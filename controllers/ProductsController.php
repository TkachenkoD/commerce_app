<?php 
include_once ROOT."/models/Category.php";
include_once ROOT."/models/Product.php";
include_once ROOT."/models/User.php";
include_once ROOT."/components/Pagination.php";

Class ProductsController {

    public function actionList($page = 1){
        /**
         * shows all list of items in db
         */

        //create pagination
        $totalItemsInDB = Product::getTotalProductsInDb(); //get total amount of items of exact category in DB
        $pagination = new Pagination($totalItemsInDB, $page, Product::SHOW_BY_DEFAULT, 'page-');

        echo "page_".$page;
        echo "enjoing here on ProductController";

        $listCategories = Category::getCategoryList(); //get list of categories for ul
        $latestProducts = Product::getLatestProducts(4, $page);//get list of all products is DB the arg -is amount of items on the page
        require_once(ROOT."/views/productList/view.php");
        return true;
    }

    public function actionView($number){
         /**
         * shows one item
         */

        echo "fun on ProductController with  Product$". $number;
        $product = Product::getProductById($number);
     
        require_once(ROOT."/views/product/view.php");
        return true;
    }
    
    public function actionView_category($categoryId,$page = 1){
         /**
         * shows all items in exact category
         */
        
        //create pagination
        $totalItemsInCategory = Product::getTotalProductsInCategory($categoryId); //get total amount of items of exact category in DB
        $pagination = new Pagination($totalItemsInCategory, $page, Product::SHOW_BY_DEFAULT, 'page-');

        $listCategories = Category::getCategoryList(); //get list of categories for ul
        $listProductsById = Product::getProductsListByCategory($categoryId, $page); // get list of products by category ID
        require_once(ROOT."/views/productList/viewCategory.php"); 
        return true;
    }

}