<?php
use Gregwar\Image\Image;

class FileHelper{
  public static function getImage($image_name){
    $parts = explode("_",$image_name);
    $data_image = file_get_contents("./public/images/$parts[0].jpg");
    $data = Image::open($data_image)->resize(100, 100);

    if ($data_image != FALSE) {
    header('Content-type: image/jpeg');
    print $data_image;
    }
    else {
      print "Not found";
    }
  }
  public static function getStyle($css_name){

    $cssFileName = "./public/css/$css_name.css";
    $reader = new \Crossjoin\Css\Reader\CssFile($cssFileName);
    $writer = new \Crossjoin\Css\Writer\Compact($reader->getStyleSheet());
    $cssContent = $writer->getContent();
    if ($cssContent != FALSE) {
    header('content-type: text/css');
    print $cssContent;
    }
  }
}
 ?>
