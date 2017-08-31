<?php
////router for site url -> controller/action
////url-> view'
class Router{
  static $list = [];
  ///new path from get method
  static function get($url,$callback){
    Router::$list[]=
    [
      'url'    => $url,
      'method' => 'get',
      'action' => $callback
    ];
  }
  static function redirect($url){
  Router::execute($url);
  }
    ///new path from post method
  static function post($url,$callback){
    Router::$list[]=
    [
      'url'    => $url,
      'method' => 'post',
      'action' => $callback
    ];
  }
  ////execute action
  static function execute($url,$method="get"){
    ///search the array
    $found = false;
    foreach(self::$list as $route){
      if( preg_match("/(.*)%/",$route["url"],$matches)===1){
        if (stripos($url,$matches[1]) !== false) {
          $part = explode("$matches[1]",$url);
          ///
          if (is_string($route["action"])) {
            $route["action"]($part[1]);
            $found = true;
          }
          elseif (is_array($route["action"])) {
            foreach ($route["action"] as $action) {
              $action($part[1]);
              $found = true;
            }
          }
          ///
        }
      }
      elseif (
          $route["url"] == $url
          and
          $route["method"] == $method)
           {
            ////
             if (is_string($route["action"])) {
               $route["action"]($url);
               $found = true;
             }
             elseif (is_array($route["action"])) {
               foreach ($route["action"] as $action) {
                 if (!$action()) {
                  $found = true;
                  break;
                 }
               }
          }
            ////
    }
  }
    if (!$found) {
      echo "404";
    }
  }
}

 ?>
