<?php
Class Category{
    /**
     * returns array of all categories
     */
    public static function getCategoryList(){

        $db = Db::getConnection();

        $categoryArr = [];

        $result = $db->query('SELECT id, name '
                            .'FROM category '
                            .'ORDER by sort_order ASC');
        $i = 0;
        while ($row = $result->fetch()){
            $categoryArr[$i]['id'] = $row['id'];
            $categoryArr[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryArr;
    }
}