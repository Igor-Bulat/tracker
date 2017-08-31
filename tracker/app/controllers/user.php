<?php
use Gregwar\Captcha\CaptchaBuilder;
?>
<?php

///user controller class
class UserController{
  ////user-list
  static function list(){
    $users = User::all();
    ren("user-list",["users"=>$users]);
  }

  ///create account
  static function create(){
    if (empty($_POST)) {
    ren("signup-form",[]);
    }
    else{
      $username = $_POST['username'];
      $password = $_POST['password'];
      $email    = $_POST['email'];
      $role     = $_POST['role'];
      if (!UserController::isValidUsername($username)) {
          ren("signup-form",["error" => "invalid name"]);
      }
      else{
        $user = new User($username,$password,$email,$role);
        $user->save();
        header("Location: ?user/login");
      }
    }
  }

  ///login account
  static function login(){
    $builder = new CaptchaBuilder;
    if (empty($_POST)) {
    ren("signin-form",[]);
    }

    else{
      $username = $_POST['username'];
      $password = hash('ripemd160',$_POST['password']).SECRET_KEY;
      $user = User::find($username,$password) ;
      /// check if captcha was introduced in form
      if (isset($_POST['captcha'])) {

        $match = $_POST['captcha'];
        /// check captcha on the correctness of the input
        if(Session::get('phrase') == $match) {
          Session::delete('phrase');
          $username = $_POST['username'];
          $password = hash('ripemd160',$_POST['password']).SECRET_KEY;
          $user = User::find($username,$password) ;
          }
          /// create variable if captcha was introduced incorrectly
          else {
              $capt_error = true;
          }

      }
      /// successful login
      if ( isset($user) ) {
        var_dump($user);
        Session::set("user",$user->id);
        //Router::redirect("user/detail/$user->id");
        header("Location: ?user/detail/$user->id");
      }
      /// Count the number of incorrect entries
      else{
        $a = Session::get("a");
        if ($a === null) {
          $a = 1;
        }
        else{
          $a++;
        }
        //// if more than 3 create capthcha
        if ($a == 3) {
          $builder->build();
          $capthcha = $builder->inline();
          //// saving the data from captcha into the session
          Session::set('phrase',$builder->getPhrase());
        }
        //// record the number of incorrect entries in the session
        else{
            Session::set("a",$a);
        }

        //// check if captcha is created
        if (isset($capthcha)) {
          //// output captcha and message about incorrect input
          if (isset($capt_error)) {
            ren("signin-form",["img"=>$capthcha,"cpt_er" => "wrong captcha"]);
          }
            //// output captcha
          else {
            ren("signin-form",["error"=>"Invalid user name or pass","img"=>$capthcha]);
          }
          }
            //// output message about incorrect username or password
          else {
          ren("signin-form",["error"=>"Invalid user name or pass"]);
          }
        }
      }
    }
  ///validation fann_get_cascade_activation_functions
  static function isValidUsername($username){
    return strlen( $username ) >= 3;
  }
///detail view
  static function detail($id){
    $data = json_decode(file_get_contents("database/users/$id.json"),true);
    ren("user-detail",["data" => $data]);
    }

    public static function check_login(){
        $session = Session::get("user");
        if (!isset($session)) {
          Router::redirect("user/login");
            return false;
        }
        else{
          return true;
        }
        }

    //login/logout
    public static function logout(){
      $session = Session::get('user');
      if (isset($session)) {
        Session::delete('user');
      }
      header("Location: ?user/login");
        }

        // output of new users
              public static function new_users(){
                  $users = User::all();
                  foreach ($users as $user) {
                    $user_time = date("m.d.y",$user->time);
                    $time = date("m.d.y",time());
                    if ($user_time == $time) {
                      $new_users[] = $user;
                    }
                  }
                  if (isset($new_users)) {
                    return $new_users;
                  }
                  else {
                    return $new_users = null;
                  }
              }
            // views counter
              public static function views(){
                $file = file_get_contents('database/views/views.json');
                $views = json_decode($file);
                unset($file);
                $user_ip = getenv("REMOTE_ADDR");
                $views[] = array("id" => $user_ip,"time" => time());
                file_put_contents("database/views/views.json",json_encode($views));
                unset($views);
              }

              public static function show_views(){
                $list = json_decode(file_get_contents("database/views/views.json"));
                return $list;
              }

              public static function new_views(){
                $views = UserController::show_views();
                foreach ($views as $view) {
                  $view_time = date("m.d.y",$view->time);
                  $time = date("m.d.y",time());
                  if ($view_time == $time) {
                    $new_views[] = $view;
                  }
                }
                if (isset($new_views)) {
                  return $new_views;
                }
                else {
                  return $new_views = null;
                }
              }
  // user delete
  public static function delete($id){
    $files = scandir("database/users");
     unset($files[0]);
     unset($files[1]);
    foreach ($files as &$file) {
      $match = explode(".",$file);
      if ($match[0] == $id) {
        unlink("database/users/$file");
      }
      }
      header("Location: ?admin/users");
  }
  //////user update
  public static function update($name){
    if (isset($_POST['id']) and isset($_POST['nickname'])) {

      $file = file_get_contents("database/users/$_POST[id].json");

      $user_data = json_decode($file,TRUE);

      $user_data['nickname']  = $_POST['nickname'];
      $user_data['password']  = $_POST['password'];
      $user_data['email']     = $_POST['email'];
      $user_data['id']        = $_POST['id'];
      $user_data['time']      = $_POST['time'];
      $user_data['role']      = $_POST['role'];

      file_put_contents("database/users/$_POST[id].json",json_encode($user_data));
      unset($user_data);
      header("Location: ?admin/users");
    }
    else{
      $users = User::find($name);
      ren("admin-user-form",["user" => $users]);
    }
    }

}


 ?>
