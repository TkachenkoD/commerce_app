<?php
Class News{

    /**
     * returns single news by id
     * 
     */
    public static function getNewsById($id){
        /**
         * requset to data base
         */
        $id = intval($id);
        
        if($id){
        
          $db = Db::getConnection();
          
          $result = $db->query('SELECT * '
                                .'FROM news '
                                .'where id='.$id);
         
          $result->setFetchMode(PDO::FETCH_ASSOC);
        //   $result->setFetchMode(PDO::FETCH_NUM);

          $newsItem = $result->fetch();

          return $newsItem;
        }

        echo "this is from Model - news #$id";
        echo "<div>
        <h3>test</h3>
        <h5>test2</h5>
        </div>";
    }
    
     /**
      * returns array of news
      */
      public static function getNewsList(){
          /**
           * request to data base
           */
       
          $db = Db::getConnection();
          $newList = [];

          $result = $db->query('SELECT id, title, date, short_content '
                            .'FROM news '
                            .'ORDER by date DESC '
                            .'LIMIT 10');

            $i = 0;
            while ($row = $result->fetch()){
                $newsList[$i]['id'] = $row['id'];
                $newsList[$i]['title'] = $row['title'];
                $newsList[$i]['date'] = $row['date'];
                $newsList[$i]['short_content'] = $row['short_content'];
                $i++;
            }
            return $newsList;
      }
}