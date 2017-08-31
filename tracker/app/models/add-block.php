<?php
class AddBlock{

  public $type;
  public $name;
  public $price;
  public $width;
  public $height;
  public $wrapper;

  ///create
  public function __construct($type,$name,$price,$width,$height,$wrapper){
    $this->type        = $type;
    $this->name        = $name;
    $this->price       = $price;
    $this->width       = $width;
    $this->height      = $height;
    $this->wrapper     = $wrapper;
  }

  public function save(){
    $time = time();
    $add = json_encode($this);
    file_put_contents("database/add/$time.json",$add);
  }

  public function all(){
    $files = scandir("database/add");
    unset($files[0]);
    unset($files[1]);
    foreach ($files as $file) {
      $array = json_decode(file_get_contents("database/add/$file"));
        $blocks[] = $array;
    }
    return $blocks;
  }

  }



 ?>
