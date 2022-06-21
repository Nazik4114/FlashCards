<?php
class RememberController{

function Remember(){
   if(!isset($_SESSION['AnShow'])){
    SetWordsToSession(GetWords(),$_POST['Count']);
    }
  if(count($_SESSION['AnShow'])>0){
   $Word=array_shift($_SESSION['AnShow']);
   SetWordsToSessionShows($Word);
        $page="Page2";
  }else{
    header('Location:/?action=test');
  }
        require_once VIEWS_PATH."/master.php";
}
}