<?php
$Score = 0;
$action = "home";
if(isset($_GET['action'])) {
    $action = $_GET['action'];
}

route($routesMap, $action);
