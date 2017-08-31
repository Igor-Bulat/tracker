<?php
class AddBlockController{

public static function create(){
    if (empty($_POST)) {
  ren("admin-addblock-form",[]);
  }
  else{
    $type   = $_POST['type'];
    $name   = $_POST['name'];
    $price  = $_POST['price'];
    $width  = $_POST['width'];
    $height = $_POST['height'];
    $wrapper= $_POST['wrapper'];
    $add = new AddBlock($type,$name,$price,$width,$height,$wrapper);
    $add->save();
    }
      }

      public function list(){
      return $blocks = AddBlock::all();
      }

    }

 ?>
