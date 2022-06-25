<?php
/**
 * Dump and die
 *
 * @param boolean $flag
 * @param array $arguments
 * @return void
 */
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
    /**
     * This method building  controller path and returned class name and method
     *
     * @param array $routes
     * @param string $action
     * @return array
     */
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
/**
 * Returns array words
 *
 * @return array
 */
 function getWords(){
    if(file_exists(JSON_FILE."/words.json")){
        $Words=json_decode(file_get_contents(JSON_FILE."/words.json"),true); 
        return $Words;
    }else{
       return [];
    }
 }
 /**
  *Adds words to super global array $_SESSION['AnShow']
  *
  * @param array $words
  * @param int $count
  * @return void
  */
 function setWordsToSession($words,$count){
        for ($i=0; $i <$count ; $i++) { 
            $_SESSION['AnShow'][]=[
                'en'=>$words[$i]['en'],
                'ua'=>$words[$i]['ua'],
            ];
        }
 }
 /**
  * Adds word to super global array $_SESSION['Show']
  *
  * @param array $word
  * @return void
  */
 function setWordsToSessionShows($word){
        $_SESSION['Show'][]=[
            'en'=>$word['en'],
            'ua'=>$word['ua'],
        ];
    
 }
  /**
  * Adds word to super global array $_SESSION['Audit']
  *
  * @param array $word
  * @return void
  */
 function setWordsToSessionAudit($word){
    $_SESSION['Audit'][]=[
        'en'=>$word['en'],
        'ua'=>$word['ua'],
    ];
}
/**
 * Adds word to super global array $_SESSION['Audit']
 *
 * @param array $wordEn
 * @return void
 */
function setAnswerToSession($wordEn){
    $_SESSION['Answer'][]=[
        'en'=>$wordEn,
    ];
}
/**
 * compares to word1 and word2
 *
 * @param array $word
 * @param string $w
 * @return string
 */
function audit($word,$w){

    if(strcasecmp($word['en'],$w)==0){
        return "True";
    }else{
        return "False";
    }

}
/**
 * Checks how many words are correct
 *
 * @return int
 */
function audit1(){
$c=0;
    for ($i=0; $i < count($_SESSION['Audit']); $i++){
    if(strcasecmp($_SESSION['Audit'][$i]['en'],$_SESSION['Answer'][$i]['en'])==0){
       $c++;
    }
}
    return $c;
}
