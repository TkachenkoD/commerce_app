<?php
class TestController{

    public function actionTest_fetching($x){
        sleep(4); //for loader testing
        //usual ajax request
        // if simple string in POST 
        // echo 'hi from controller: '.$x." ".$_POST['lname'];
        //if json string in post
        // $arr = json_decode($_POST['fname'], true);
        // echo 'hi from controller: '.$x." here :".$arr['one_key'];

        //fetch js request
        $out = file_get_contents('php://input');
        $arr = json_decode($out, true);
        extract($arr);
        // echo "<pre>";print_r($arr);die;
        $arr['one_key'] .= "<h6>{$one_key} _bit modified with php -->{$two_key} x>>{$x}<h6>"; 
        // $arr['one_key'] .= "<h6>{$arr['one_key']} _bit modified with php<h6>"; 
        // //if js uses response.json();
        // echo json_encode($arr);
        // // if js uses response.text();
        echo $arr['one_key'];


        return true;
    }
}

?>