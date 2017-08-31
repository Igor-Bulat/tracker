<?php
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
?>
<?php
class Torrent{
  public $type;
  public $genre;
  public $name;
  public $name_en;
  public $file;
  public $image;
  ///create
  public function __construct($type,$genre,$name,$name_en,$file,$image){
    $this->type     = $type;
    $this->genre    = $genre;
    $this->name     = $name;
    $this->name_en  = $name_en;
    $this->file     = $file;
    $this->image    = $image;
  }
  ///save user to disc/database
  public function save(){
    if ($this->file['type'] == 'application/x-bittorrent' and $this->image['type'] == 'image/jpeg' or $this->image['type'] == 'image/png') {
      $uuid4 = Uuid::uuid4();
      $time = time();
      $this->time = $time;
      $file_name   = $uuid4."_".$this->file['name'];
      $image_name  = $uuid4."_".$this->image['name'];
      move_uploaded_file($this->file["tmp_name"],"public/torrents/$file_name");
      move_uploaded_file($this->image["tmp_name"],"public/images/$image_name");
      $this->file = $file_name;
      $this->image = $image_name;
      $torrent = json_encode($this);
      file_put_contents("database/torrents/{$uuid4->toString()}.json",$torrent);
      Router::redirect("torrent/list");
    }
    else{
      ren("torrent-form",["error" => "Invalid file type"]);
    }
    }
  ///finds a user
  public static function find($words){
    $files = scandir("database/torrents");
     unset($files[0]);
     unset($files[1]);
    foreach ($files as $file) {
      $array = json_decode(file_get_contents("database/torrents/$file"));
      //var_dump($array->nickname);
        $find = stripos($array->name,$words);
        if ($find !== false) {
          $match[] = $array;
        }
    }
    return $match;
  }
  ///show all torrents
    public static function all(){
      $files = scandir("database/torrents");
       unset($files[0]);
       unset($files[1]);
      foreach ($files as $file) {
        $torrent = json_decode(file_get_contents("database/torrents/$file"));
        $array[] = $torrent;
        }
        return $array;
    }
  }



 ?>
