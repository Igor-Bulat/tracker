<?php
include 'app/models/torrent.php';
$tor = new Torrent("film","drama","Zima","file.mp4","image");
$tor->save();
 ?>
