<?php 
Class User{

    public static function checkName($name){
     
        if(strlen($name)>= 2){
            return true;
        }
        return false;
    }
    public static function checkEmail($email){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }
    public static function checkPassword($password){

        if(strlen($password)>=6){
            return true;
        }
        return false;
    }
    public static function checkEmailExists($email){

        $db = DB::getConnection();

        $sql = "SELECT count(*) FROM user WHERE email = :email";
        $result = $db->prepare($sql);
        $result->bindParam(":email", $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn()){
           
            return true;
        }
        return false;
    }

    public static function register($name,$email, $password){

        $db = DB::getConnection();

        $sql = "INSERT INTO user (name, email, password) "
              ."VALUES (:name, :email, :password)";
        
        $result = $db->prepare($sql);
        
        $result->bindParam(":name", $name, PDO::PARAM_STR);
        $result->bindParam(":email", $email, PDO::PARAM_STR);
        $result->bindParam(":password", $password, PDO::PARAM_STR);
        
        return $result->execute();

    }

    public static function chekUserData($email, $password){

        // create conn w/DB
        $db = DB::getConnection();
        
        //make query
        $sql = "SELECT id FROM user WHERE email=:email AND password=:password";

        $result = $db->prepare($sql);

        $result->bindParam(":email", $email, PDO::PARAM_INT);
        $result->bindParam(":password", $password, PDO::PARAM_INT);
        $result->execute();
       
        //find ID of user, comparing with $email and $password
        $user = $result->fetch();

            //if exist - return the ID 
            if($user){
                return $user["id"];
            }
            //else - return false
            return false;

    }

    public static function auth($userId){
        // session_start();
        $_SESSION["user"] = $userId;
    }

    public static function checkLogged(){
        // session_start();
        if(isset($_SESSION["user"])){
            return $_SESSION["user"];
        }else{
            header("Location: /user/login");
        }

    }

    public static function getUserById($idUser){

        
         if($idUser){

            // create conn w/DB
         $db = DB::getConnection();
         
             $sql = "SELECT * FROM user WHERE id=:id";

             $result = $db->prepare($sql);

             $result->bindParam(":id", $idUser, PDO::PARAM_STR);
 
             $result->setFetchMode(PDO::FETCH_ASSOC);
             $result->execute();

        return $result->fetch();

        }
 
    }

    public static function isGuest(){
        /**
         * check if user is a logged in or a guest(not logged in)- for interface rendering
         * show or hide some buttons and fields 
         *  
         */
        //  session_start();
         //session start can be moved to Front Controller - this will run session every time before any method execution
         //but for learing purpose, I leave it here inside the method and will call it every time

         //update : session_start is removed to FrontController, because if it stays here it makes mistakes,
         //because session starts over and over in different methods on the one page

         if(isset($_SESSION["user"])){
             return false;
         }
         return true;
    }

    public static function editProfile($userId, $name, $password){
        /**
         * edit user profile
         * set into the user table new password and new name 
         */
        if($userId){

            // create conn w/DB
         $db = DB::getConnection();

            $sql = "UPDATE user
            SET name=:name, password=:password
            WHERE id=:idUser";

            $result = $db->prepare($sql);

            $result->bindParam(":idUser", $userId, PDO::PARAM_INT); 
            $result->bindParam(":name", $name, PDO::PARAM_STR); 
            $result->bindParam(":password", $password, PDO::PARAM_STR); 

            return $result->execute();
        }

    }


} 