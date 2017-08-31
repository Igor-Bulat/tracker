<?php
////USERS/////
//create
Router::get("user/create","UserController::create");
//delete
Router::get("user/delete","UserController::test");
//profile
Router::get("user/profile","UserController::test");
//list
Router::get("user/list","UserController::list");
//login
Router::get("user/login","UserController::login");
//logout
Router::get("user/logout","UserController::logout");
//test
Router::get("user/test",["UserController::test","UserController::test_1"]);


/////TORRENTS/////
//create
Router::get("torrent/create",["UserController::check_login","TorrentController::create"]);
//list
Router::get("torrent/list","TorrentController::list");
Router::get("torrent/detail/%","TorrentController::detail");
Router::get("user/detail/%","UserController::detail");

//////COMMENTS//////
//create
Router::get("comment/create","CommentController::create");


//////homepage////
Router::get("homepage","Homepage::index");

//////lang select////
Router::get("lang/en","Lang::select");
Router::get("lang/ru","Lang::select");
Router::get("lang/md","Lang::select");

////////////////////ADMIN PANEL////////////////////

///login logout home
Router::get("admin/login","AdminController::login");
Router::get("admin","AdminController::index");
Router::get("admin/logout","AdminController::logout");
//////list torr user comments
Router::get("admin/users","AdminController::users");
Router::get("admin/torrents","AdminController::torrents");
Router::get("admin/comments","AdminController::comments");
//user upt del
Router::get("user/delete/%","UserController::delete");
Router::get("user/update/%","UserController::update");
////torrent upd del
Router::get("torrent/delete/%","TorrentController::delete");
Router::get("torrent/update/%","TorrentController::update");
////comment upd del
Router::get("comment/delete/%","CommentController::delete");
Router::get("comment/update/%","CommentController::update");

Router::get("add","AddBlockController::create");


/////////////
Router::get("css/%","FileHelper::getStyle");
Router::get("image/%","FileHelper::getImage");
 ?>
