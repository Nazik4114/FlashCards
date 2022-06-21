<?php
class TestController{

function Test(){

    if(isset($_POST['en'])){
        SetAnswerToSession($_POST['en']);
    }

    if(Count($_SESSION['Show'])>0){
        $Word=array_shift($_SESSION['Show']);
        SetWordsToSessionAudit($Word);
             $page="Page3";
       }else{
         header('Location:/?action=audit');
       }
             require_once VIEWS_PATH."/master.php";
     
}
}