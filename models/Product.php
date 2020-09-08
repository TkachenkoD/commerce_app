<?php

Class Product {

    const SHOW_BY_DEFAULT = 4;

    /**
     * returns an array of all Latest Products
     */
    public static function getLatestProducts($count = self::SHOW_BY_DEFAULT, $page = 1){

        $count = intval($count);
        $page = intval($page);
        $offset = ($page - 1) * $count;

        $db = DB::getConnection();

        $productsList = array();

        $result = $db->query('SELECT id, name, price, image, is_new FROM product '
                            . 'WHERE status = "1"'
                            . 'ORDER BY id DESC '
                            . 'LIMIT '. $count
                            . ' OFFSET '. $offset);

        $i = 0;
        while ($row = $result->fetch()){
            $productsList[$i]["id"] = $row["id"];            
            $productsList[$i]["name"] = $row["name"];            
            $productsList[$i]["price"] = $row["price"];            
            $productsList[$i]["image"] = $row["image"];            
            $productsList[$i]["is_new"] = $row["is_new"];            
            $i++;
        }

        return $productsList;

    }

    public static function getProductsListByCategory($categoryId = false, $page = 1){
        
        if($categoryId){

            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
    

            $db = DB::getConnection();

            $productsListByCategory = [];

            $result = $db->query("SELECT id, name, price, image, is_new FROM product "
            . "WHERE status = '1' AND category_id = '$categoryId' "
            . "ORDER BY id DESC "
            . "LIMIT ".self::SHOW_BY_DEFAULT
            . " OFFSET ". $offset);

            $i = 0;

            while($row = $result->fetch()){
                $productsListByCategory[$i]['id'] = $row['id'];
                $productsListByCategory[$i]['name'] = $row['name'];
                $productsListByCategory[$i]['price'] = $row['price'];
                $productsListByCategory[$i]['image'] = $row['image'];
                $productsListByCategory[$i]['is_new'] = $row['is_new'];
                $i++;
            }

        
        return $productsListByCategory;
        }

    }

    public static function getProductById($productId){
        /**
         * returns array with data about one item
         */

         if($productId){

            $product = [];

            $db = DB::getConnection();

            $result = $db->query("select * from product where id = $productId");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $product = $result->fetch();

             return $product;
         }
        
    }

    public static function getTotalProductsInCategory($categoryId){
        /**
         * get amount of items for exact category
         */
        if($categoryId){
            
            $totalItems = [];

            $db = DB::getConnection();

            $result = $db->query('SELECT count(id) AS countq FROM product '
                                .'WHERE status="1" AND category_id="'.$categoryId.'"');

            $totalItems = $result->fetch();
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $totalItems['countq'];
        }

    }

    public static function getTotalProductsInDb(){
        /**
         * get amount of all items 
         */
  
            
            $totalItems = [];

            $db = DB::getConnection();

            $result = $db->query('SELECT count(id) AS count_all FROM product '
                                .'WHERE status="1"');

            $totalItems = $result->fetch();
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $totalItems['count_all'];
    

    }

}