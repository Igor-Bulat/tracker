<?php
class AdminController{
  ///login
  public static function login(){
    if (empty($_POST)) {
      ren("admin-login",[]);
    }
    else{
      $nickname    = $_POST['nickname'];
      $password    = hash('ripemd160',$_POST['password']).SECRET_KEY;
      $admin = User::find($nickname,$password) ;
    }

    if ( isset($admin) and $admin->role == 'admin') {
      Session::set("admin",$admin->nickname);
      header("Location: ?admin");
    }
    elseif (isset($admin) and $admin->role != 'admin'){
      ren("admin-login",["error" => "Limited access"]);
    }
    elseif(!isset($admin) and !empty($_POST)){
      ren("admin-login",["error" => "Wrong data"]);
    }
  }

  public static function index(){
    $session = Session::get("admin");
    if (isset($session)) {

    $users     = count(User::all());
    $new_users = count(UserController::new_users());

    $comments     = count(Comment::all());
    $new_comments = count(CommentController::new_comments());

    $torrents     = count(Torrent::all());
    $new_torrents = count(TorrentController::new_torrents());

    $views     = count(UserController::show_views());
    $new_views = count(UserController::new_views());
    ren("admin-index",["users_count" => $users,"comments_count" => $comments,"torrents_count" => $torrents,"new_tor" => $new_torrents,"new_com" => $new_comments,"new_user" => $new_users,"views" => $views,"new_views" => $new_views]);
    }
    else {
      ren("admin-login",[]);
    }
  }

  //logout
  public static function logout(){
    $session = Session::get('admin');
    if (isset($session)) {
      Session::delete('admin');
    }
    header("Location: ?admin/login");
      }

  ////show all users
  public static function users(){
    $session = Session::get("admin");
    if (isset($session)) {
      $users = User::all();
      ren("admin-users-list",["users" => $users]);
    }
    else {
      ren("admin-login",[]);
    }
  }

  ////show all torrents
  public static function torrents(){
    $session = Session::get("admin");
    if (isset($session)) {
      $torrents = Torrent::all();
      foreach ($torrents as &$torrent) {
      if ($torrent->file) {
        $path = explode("_",$torrent->file);
        $torrent->file = $path[0];
      }

    }
    ren("admin-torrents-list",["torrents" => $torrents]);
  }
    else {
      ren("admin-login",[]);
    }
  }

  ////show all comments
  public static function comments(){
    $session = Session::get("admin");
    if (isset($session)) {
      $comments = Comment::all();
    ren("admin-comments-list",["comments" => $comments]);
  }
    else {
      ren("admin-login",[]);
    }
  }
}
 ?>
