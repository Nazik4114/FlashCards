<?php
function dd($flag = true, ...$arguments) {

    if (count($arguments)) {
    
    echo "<pre>";
    
    foreach($arguments as $arg) {
    
    var_dump($arg);
    
    }
    
    echo "</pre>";
    
    if ($flag) exit;
    
    }
    
    }
 function getRouteHandler(array $routes, $action) {
    if (array_key_exists($action, $routes)) {

        list($controlerClass,$method)=explode('@',$routes[$action]);
        $controllerPath = CONTROLLERS_PATH . "/" . $controlerClass . '.php';
  
        if(!is_readable($controllerPath)) {
            throw new Exception("Undefined Controller {$controllerPath}");
        }

        require_once $controllerPath;

        return [new $controlerClass, $method];
    }
} 
 function GetWords(){
    if(file_exists(JSON_FILE."/words.json")){
        $Words=json_decode(file_get_contents(JSON_FILE."/words.json"),true); 
        return $Words;
    }else{
       return [];
    }
 }
 function SetWordsToSession($Words,$Count){
        for ($i=0; $i <$Count ; $i++) { 
            $_SESSION['AnShow'][]=[
                'en'=>$Words[$i]['en'],
                'ua'=>$Words[$i]['ua'],
            ];
        }
 }
 function SetWordsToSessionShows($Word){
        $_SESSION['Show'][]=[
            'en'=>$Word['en'],
            'ua'=>$Word['ua'],
        ];
    
 }
 function SetWordsToSessionAudit($Word){
    $_SESSION['Audit'][]=[
        'en'=>$Word['en'],
        'ua'=>$Word['ua'],
    ];
}
function SetAnswerToSession($WordEn){
    $_SESSION['Answer'][]=[
        'en'=>$WordEn,
    ];
}
function Audit($Word,$w){

    if(strcasecmp($Word['en'],$w)==0){
        return "True";
    }else{
        return "False";
    }

}
function Audit1(){
$C=0;
    for ($i=0; $i < count($_SESSION['Audit']); $i++){
    if(strcasecmp($_SESSION['Audit'][$i]['en'],$_SESSION['Answer'][$i]['en'])==0){
       $C++;
    }
}
    return $C;
}
