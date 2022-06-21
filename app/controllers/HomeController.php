<?php
class HomeController{

function Home(){

    if(isset($_POST['Recet'])){
        $_SESSION = [];
        session_destroy();
        unset($_COOKIE[session_name()]);
    }
    $page="Page1";
    require_once VIEWS_PATH."/master.php";

}
}