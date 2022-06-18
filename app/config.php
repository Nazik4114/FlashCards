<?php
define('CONTROLLERS_PATH', __DIR__."/controllers");
define('VIEWS_PATH', __DIR__."/Views");
define('BASE_URL', "http://localhost:8181");
define('JS_PATH', "http://localhost:8181/JS/");
$routesMap = [
    'home' => 'HomeController@Home',
    'remember'=>'RememberController@Remember',
    'test'=>'TestController@Test',
    'audit'=>'AuditController@Audit',
]; 
session_save_path(__DIR__."/storage");
session_start();
