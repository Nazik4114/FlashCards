<?php
if(file_exists(__DIR__."/words.json")){
$Words[]=json_decode(file_get_contents(__DIR__."/words.json"),true);
//var_dump($Words);
}
if(isset($_GET['Count'])){

}
require_once __DIR__."/Page.php";