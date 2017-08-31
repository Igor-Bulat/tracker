<?php
// function for sessions control
class Session{
  public function get($key){
    if(session_status() != PHP_SESSION_ACTIVE){
      session_start();
    }
    if (isset($_SESSION[$key])) {
      return $_SESSION[$key];
    }
    else{
      null;
    }
  }
  public function set($key,$value){
    if(session_status() != PHP_SESSION_ACTIVE){
      session_start();
    }
    $_SESSION[$key] = $value;
  }
  public function delete($key){
    if(session_status() != PHP_SESSION_ACTIVE){
      session_start();
    }
    if ($_SESSION[$key]) {
      $value = $_SESSION[$key];
      unset($_SESSION[$key]);
      return $value;
    }
    else{
      null;
    }
  }
}



 ?>
