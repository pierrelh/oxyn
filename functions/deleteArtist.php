<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
  $db = connect();

  $selectSql = "SELECT artist_demo FROM contact_artist WHERE artist_id='".$_POST['artist_id']."'";
  $result =  pg_query($db, $selectSql);
  $val = pg_fetch_all($result);
  foreach ($val as $key => $value) {
    $link = ($value['artist_demo']);
  }
  if ($link != "false") {
    include_once($_SERVER['DOCUMENT_ROOT']."/settings.php");
    $fullName = explode("/", $link);
    $fullName = array_pop($fullName);
    $fullName = explode(".", $fullName);
    $name = "oxyn-folder/user-demo/" . $fullName[0];
    $result = \Cloudinary\Uploader::destroy($name, array(
              "resource_type" => "video",
    ));
  }
  $res = pg_delete($db, 'contact_artist', $_POST);

?>
