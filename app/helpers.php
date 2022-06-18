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
 function route(array $routes, $action) {
    if (array_key_exists($action, $routes)) {

        list($controlerClass,$method)=explode('@',$routes[$action]);
        $controllerPath = CONTROLLERS_PATH . "/" . $controlerClass . '.php';
        if (is_readable($controllerPath)) {
            require_once $controllerPath;

            $ObjControler=new $controlerClass;
            $ObjControler->$method();

        } else {
            die("Undefined Controller {$controllerPath}");
        }
    }
} 
 function GetWords(){
    if(file_exists(__DIR__."/../public/words.json")){
        $Words=json_decode(file_get_contents(__DIR__."/../public/words.json"),true); 
        return $Words;
    }else{
       return [];
    }
 }
 function SetWordsToSession($Words,$Count){
    // foreach ($Words as $w) {
    //     dd(false,$w);
    //     dd(true,$w,"---------------------------");
    //     $_SESSION['AnShow'][]=[
    //         'en'=>$word['en'],
    //         'ua'=>$word['ua'],
    //     ];
        for ($i=0; $i <$Count ; $i++) { 
            //dd(true,$Words);
            // dd(false,$Words[$i]['en']);
            // dd(true,$Words[$i]['ua'],"---------------------------");
            $_SESSION['AnShow'][]=[
                'en'=>$Words[$i]['en'],
                'ua'=>$Words[$i]['ua'],
            ];
        }
    //}
   // dd(true,$_SESSION['AnShow']);

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
    for ($i=0; $i < Count($_SESSION['Audit']); $i++){
    if(strcasecmp($_SESSION['Audit'][$i]['en'],$_SESSION['Answer'][$i]['en'])==0){
       $C++;
    }
}
    return $C;
}
