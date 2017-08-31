<?php
///user controller class
class TorrentController{
  ////user-list
  static function list(){
    $torrent = Torrent::all();
    foreach ($torrent as &$value) {
    if ($value->file) {
      $path = explode("_",$value->file);
      $value->file = $path[0];
    }
    }
// cycle for ID and display
    ren("torrent-list",["torrent"=>$torrent]);
  }

  ///create torrent
  static function create(){
    if (empty($_POST)) {
    ren("torrent-form",[]);
    }
    else{
      $type   = $_POST['type'];
      $genre  = $_POST['genre'];
      $name   = $_POST['name'];
      $name_en= $_POST['name_en'];
      $file   = $_FILES['file'];
      $image  = $_FILES['image'];
      $torrent = new Torrent($type,$genre,$name,$name_en,$file,$image);
      $torrent->save();
      }
    }
///detail view
    static function detail($id){

      $comments = Comment::find($id);

      if (!empty($comments)) {
      $users    = User::all();
      foreach ($comments as &$comment) {
        foreach ($users as $user) {
          if ($comment->user_id == $user->id) {
            $comment->user_id = $user->nickname;
          }
        }
      }
      /// sort comments by date
      function srt($a,$b) {
         return $b->time - $a->time;
       }
      usort($comments,"srt");
      }

      $data = json_decode(file_get_contents("database/torrents/$id.json"),true);
      ren("torrent-detail",["data" => $data,"tor_id" => $id,"comments" => $comments]);
      }
/// display new torrents
      public static function new_torrents(){
          $torrents = Torrent::all();
          foreach ($torrents as $torrent) {
            // var_dump(date("m.d.y",$torrent->time));
            // var_dump(date("m.d.y",time()));
            $tor_time = date("m.d.y",$torrent->time);
            $time = date("m.d.y",time());
            if ($tor_time == $time) {
              $new_torrents[] = $torrent;
            }
          }
          if (isset($new_torrents)) {
            return $new_torrents;
          }
          else {
            return $new_torrents = null;
          }
      }

      /////torrent delete
      public static function delete($id){
        $files = scandir("database/torrents");
         unset($files[0]);
         unset($files[1]);
        foreach ($files as &$file) {
          $match = explode(".",$file);
          if ($match[0] == $id) {
            $data = json_decode(file_get_contents("database/torrents/$file"));
            unlink("public/torrents/$data->file");
            unlink("public/images/$data->image");
            unlink("database/torrents/$file");
            unset($data);
          }
          }
          header("Location: ?admin/torrents");
      }

      //////torrent update
      public static function update($id){
        if (isset($_POST['file']) and isset($_POST['name'])) {
          $id = explode("_",$_POST['file']);
          $file = file_get_contents("database/torrents/$id[0].json");

          $torrent_data = json_decode($file,TRUE);

          $torrent_data['type']       = $_POST['type'];
          $torrent_data['genre']      = $_POST['genre'];
          $torrent_data['name']       = $_POST['name'];
          $torrent_data['file']       = $_POST['file'];
          $torrent_data['image']      = $_POST['image'];
          $torrent_data['time']       = $_POST['time'];
          file_put_contents("database/torrents/$id[0].json",json_encode($torrent_data));
          unset($torrent_data);
          header("Location: ?admin/torrents");
        }
        else{
          $torrents = Torrent::all();
          foreach ($torrents as $torrent) {
          $match = explode("_",$torrent->file);
          //var_dump($match[0]);
          if ($match[0] == $id) {
            $data = $torrent;
          }
          }
          ren("admin-torrent-form",["torrent" => $data]);
        }
        }


}


 ?>
