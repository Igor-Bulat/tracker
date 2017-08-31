<?php
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;

class Homepage{

public function trans($a,$b){
    $eng = Session::get("en");
    $rus = Session::get("ru");
    if (isset($eng)) {
      unset($b);
      return $a;
    }
    elseif (isset($rus)) {
      unset($a);
      return $b;
    }
    else{
      unset($a);
      return $b;
    }
  }

public static function index(){

  function srt($a,$b) {
     return $b->time - $a->time;
}

  $users = User::all();
  usort($users,"srt");
  $user_data[] = $users[0];
  $user_data[] = $users[1];
  $user_data[] = $users[2];


  $torrents = Torrent::all();
  foreach ($torrents as &$value) {
  if ($value->file) {
    $path = explode("_",$value->file);
    $value->file = $path[0];
  }
  }
  usort($torrents,"srt");
  $torrent_data[] = $torrents[0];
  $torrent_data[] = $torrents[1];
  $torrent_data[] = $torrents[2];

  UserController::views();
  
  ren("homepage",["users" => $user_data,"torrents" => $torrent_data]);
}



}



 ?>
