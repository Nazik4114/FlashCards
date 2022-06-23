<?php
class RememberController{

function Remember(){
   if(!isset($_SESSION['AnShow'])){
    setWordsToSession(getWords(),$_POST['Count']);
    }
  if(count($_SESSION['AnShow'])>0){
   $word=array_shift($_SESSION['AnShow']);
   setWordsToSessionShows($word);
        $page="Page2";
  }else{
    header('Location:/?action=test');
  }
        require_once VIEWS_PATH."/master.php";
}
}