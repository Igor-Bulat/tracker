<?php
class CommentController{

    ///create comment
    static function create(){
        $user_id      = $_POST['user_id'];
        $text         = strip_tags($_POST['text']);
        $torrent_id   = $_POST['torrent_id'];

        $comment = new Comment($user_id,$text,$torrent_id);
        $comment->save();
        //Router::redirect("torrent/detail/$torrent_id");
        header("Location: ?torrent/detail/$torrent_id");
        }

  ////user-list
  static function list(){
    $torrent = Torrent::all();
    foreach ($torrent as &$value) {
    if ($value->file) {
      $path = explode("_",$value->file);
      $value->file = $path[0];
    }
    }
// cicle for ID and display
    ren("torrent-list",["torrent"=>$torrent]);
  }
/// display new comments
  public static function new_comments(){
      $comments = Comment::all();
      foreach ($comments as $comment) {
        $com_time = date("m.d.y",$comment->time);
        $time = date("m.d.y",time());
        if ($com_time == $time) {
          $new_comments[] = $comment;
        }
      }
      if (isset($new_comments)) {
        return $new_comments;
      }
      else {
        return $new_comments = null;
      }
  }

  /////comment delete
  public static function delete($id){
    $files = scandir("database/comments");
     unset($files[0]);
     unset($files[1]);
    foreach ($files as &$file) {
      $match = explode(".",$file);
      if ($match[0] == $id) {
        unlink("database/comments/$file");
      }
      }
      header("Location: ?admin/comments");
  }
  //////user update
  public static function update($id){
    if (isset($_POST['id'])) {

      $file = file_get_contents("database/comments/$_POST[id].json");

      $comment_data = json_decode($file,TRUE);

      $comment_data['user_id']        = $_POST['user_id'];
      $comment_data['text']           = $_POST['text'];
      $comment_data['torrent_id']     = $_POST['torrent_id'];
      $comment_data['id']             = $_POST['id'];
      $comment_data['time']           = $_POST['time'];


      file_put_contents("database/comments/$_POST[id].json",json_encode($comment_data));
      unset($comment_data);
      header("Location: ?admin/comments");
    }
    else{
      $comments = Comment::all();
      foreach ($comments as $comment) {
        if ($comment->id == $id) {
          $data = $comment;
        }
      }
      ren("admin-comment-form",["comment" => $data]);
    }
    }
}
 ?>
