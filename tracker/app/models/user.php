<?php
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
?>
<?php
// basis for User data type and User creation (creat,read,update,delete)
class User{
  public $nickname;
  public $password;
  public $email;
  public $role;
  ///create
  public function __construct($nickname,$password,$email,$role){
    $this->nickname = $nickname;
    $this->password = $password;
    $this->email    = $email;
    $this->role     = $role;
  }
  ///save user to disc/database
  public function save(){
    $uuid4 = Uuid::uuid4();
    $time = time();
    $this->id = $uuid4;
    $this->time = $time;
    $this->password = hash('ripemd160',$this->password).SECRET_KEY;
    $user = json_encode($this);
    file_put_contents("database/users/{$uuid4->toString()}.json",$user);
  }

  ///finds a user
  public static function find($nickname,$password = null){
    $files = scandir("database/users");
     unset($files[0]);
     unset($files[1]);
    foreach ($files as $file) {
      $array = json_decode(file_get_contents("database/users/$file"));
      //var_dump($array->nickname);
        if (isset($nickname) and $password == null and $array->nickname == $nickname) {
          return $array;
        }
        if ($password != null and $array->nickname == $nickname and $array->password == $password) {
          return $array;
        }
      }
    }


    public static function all(){
      $files = scandir("database/users");
       unset($files[0]);
       unset($files[1]);
      foreach ($files as $file) {
        $user = json_decode(file_get_contents("database/users/$file"));
        $array[] = $user;
        }
        return $array;
        }

  }
 ?>
