<?php
// include_once ROOT."/models/Profile.php";
include_once ROOT."/models/User.php";

Class ProfileController{

    public function actionIndex(){

        // check whether user is logged
        $userId = User::checkLogged();
        $userInfo = User::getUserById($userId);

        require_once(ROOT."/views/profile/index.php");
        return true;

    }

    public function actionEdit(){

        $userId = User::checkLogged();
        $userInfo = User::getUserById($userId);
        $result = false;

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)){
                $errors[] = "name is too short,name should be no less than 2 symbols";
            }

            if(!User::checkPassword($password)){
                $errors[] = "password is too short, six symbols minimum is required";
            }

            if($errors == false){
               $result = User::editProfile($userId, $name, $password);
            }


        }

        require_once(ROOT."/views/profile/edit.php");
        return true;
    }

}