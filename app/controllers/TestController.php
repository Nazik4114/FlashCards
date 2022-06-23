<?php
class TestController{

function Test(){

    if(isset($_POST['en'])){
        setAnswerToSession($_POST['en']);
    }

    if(count($_SESSION['Show'])>0){
        $word=array_shift($_SESSION['Show']);
        setWordsToSessionAudit($word);
             $page="Page3";
       }else{
         header('Location:/?action=audit');
       }
             require_once VIEWS_PATH."/master.php";
     
}
}