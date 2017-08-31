<?php
//////load all that necessary/////////
include 'vendor/autoload.php';
include 'app/helpers/files.php';
include 'app/helpers/session.php';
const SECRET_KEY = "456gx56h4g6gs6g6h87vj578jm564cjh67h56x";
$session = Session::get('user');
$login = false;
if (isset($session)) {
    $login = Session::get('user');
}
$admin = Session::get('admin');
$adm   = false;
if (isset($admin)) {
  $adm = Session::get('admin');
}
$loader = new Twig_Loader_Filesystem('app/views');
$twig = new Twig_Environment($loader, array(
    'cache' => 'public/cache',
    'debug' => true
));
$twig->addExtension(new Twig_Extension_Debug());
$twig->addGlobal('login', $login);
$twig->addGlobal('admin', $adm);
$twig->addFunction('translate',	new Twig_Function_Function('trans'));
include 'app/helpers/render.php';
//////model/////////////
include 'app/models/user.php';
include 'app/models/torrent.php';
include 'app/models/comment.php';
include 'app/models/add.php';
include 'app/models/add-block.php';
/////controller/////////
include 'app/controllers/user.php';
include 'app/controllers/torrent.php';
include 'app/controllers/index.php';
include 'app/controllers/comment.php';
include 'app/controllers/lang.php';
include 'app/controllers/admin.php';
include 'app/controllers/add-block.php';
/////controller/////////

////at the end!!!!!!!!!!!!! -> 'url'
include 'app/routes.php';
include 'app/urls.php';
if (!empty($_GET)) {
    $url = key($_GET);
    Router::execute($url);
}
else {
  $url = "homepage";
  Router::execute($url);
}
 ?>
