<?php
class Lang{
  public static function select($url){
      $url_path = explode("/",$url);
      if ($url_path[1] == 'en') {
        Session::delete("ru");
          Session::delete("md");
      }
      elseif($url_path[1] == 'ru') {
        Session::delete("en");
          Session::delete("md");
      }
      elseif($url_path[1] == 'md') {
        Session::delete("ru");
          Session::delete("en");
      }
      Session::set("$url_path[1]","$url_path[1]");
        header("Location: ".$_SERVER['HTTP_REFERER']);
  }
}

function trans($eng = null,$rus,$md = null){
  $english   = Session::get("en");
  $russian   = Session::get("ru");
  $moldavian = Session::get("md");
  if (isset($english)) {
    if ($eng == null) {
      return $rus;
    }
    else{
      return $eng;
    }
  }
  if (isset($russian)) {
    return $rus;
  }
  if (isset($moldavian)) {
    if ($md == null) {
      return $rus;
    }
    else{
      return $md;
    }
  }
  if(!isset($russian) and !isset($english)){
    return $rus;
  }
}

 ?>
