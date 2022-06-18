<?php
class HomeController{

function Home(){

    if(isset($_POST['Recet'])){
        session_unset();
    }
    $page="Page1";
    require_once VIEWS_PATH."/master.php";

}
}