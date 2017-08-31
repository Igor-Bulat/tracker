<?php
//////fucntion that render a page with TWIG
function ren($file_name, $data){
  global $twig;
  $html = $twig->render($file_name.".tpl.php",$data);
  $pattern = '/<div.*class\s*=\s*["\'].*add-block.*["\']\s*>(.*)<\/div>/';

  $blocks = AddBlockController::list();
  foreach ($blocks as $block) {
    var_dump($block->wrapper);
  }

  $html = preg_replace($pattern,'banner',$html);
  print $html;
}


 ?>
