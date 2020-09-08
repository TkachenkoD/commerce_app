<?php 
include_once ROOT."/models/User.php";
class UserController{

    public function actionRegister(){
        echo "hi my user";
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if(!User::checkName($name)){
                $errors[] = "name is too short,name should be no less than 2 symbols";
            }

            if(!User::checkEmail($email)){
                $errors[] = "incorrect email type";
            }

            if(!User::checkPassword($password)){
                $errors[] = "password is too short, six symbols minimum is required";
            }

            if(User::checkEmailExists($email)){
                $errors[] = "this email already exists. enter another one";
            }

            if($errors == false){
               $result = User::register($name, $email, $password);
            }


        }

        require_once(ROOT."/views/user/register.php");

        return true;
    }

    public function actionLogin(){

        $email = "";
        $password = "";

        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;


            if(!User::checkEmail($email)){
                $errors[] = "incorrect email type";
            }

            if(!User::checkPassword($password)){
                $errors[] = "password is too short, six symbols minimum is required";
            }
            
            if($errors == false){
                //check whether user registered
                $userIDExists = User::chekUserData($email, $password);
                
                if($userIDExists == false){
                    $errors[] = "can't find user with this email and password.... try again or <a href=\"/user/register\">register</a>";
                }else{
                    //auth -> set id user to session
                 User::auth($userIDExists);
                    //redirect to profile page
                 header("Location: /profile/"); 
                }
           
            }

           
        }


        require_once(ROOT."/views/user/login.php");

        return true;
    }

    public function actionLogout(){
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }

}