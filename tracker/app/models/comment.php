<?php
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
?>
<?php
// basis for User data type and User creation (creat,read,update,delete)
class Comment{
  public $user_id;
  public $text;
  public $torrent_id;

  ///create
  public function __construct($user_id,$text,$torrent_id){
    $this->user_id   = $user_id;
    $this->text       = $text;
    $this->torrent_id    = $torrent_id;
  }
  ///save user to disc/database
  public function save(){
    $uuid4 = Uuid::uuid4();
    $time = time();
    $this->id = $uuid4;
    $this->time = $time;
    $comment = json_encode($this);
    file_put_contents("database/comments/{$uuid4->toString()}.json",$comment);
  }

  ///finds comments
  public static function find($id){
    $files = scandir("database/comments");
     unset($files[0]);
     unset($files[1]);
    foreach ($files as $file) {
      $array = json_decode(file_get_contents("database/comments/$file"));
      if ($array->torrent_id == $id) {
        $data[] = $array;
      }
    }
    if (empty($data)) {
      $data = 'No comments yet';
    }
    else{
      return $data;
    }
    }


    public static function all(){
      $files = scandir("database/comments");
       unset($files[0]);
       unset($files[1]);
      foreach ($files as $file) {
        $comment = json_decode(file_get_contents("database/comments/$file"));
        $array[] = $comment;
        }
        return $array;
        }


  }



 ?>
