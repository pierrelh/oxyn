<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");

  function map_entities($str) {
    return htmlentities($str, ENT_QUOTES);
  }

  function uploadFile($file_path){
    include_once($_SERVER['DOCUMENT_ROOT']."/functions/getCloudinary.php");
    $date = date_create();
    $name =  date_timestamp_get($date) . rand(1, 999999999);
    $result = \Cloudinary\Uploader::upload($file_path, array(
              "public_id" => $name,
              "resource_type" => "auto",
              "folder" => "oxyn-folder/user-demo/",
              "chunk_size" => 5000000
    ));
    unlink($file_path);
    return $result['secure_url'];
  }

  if (!empty($_FILES)) {
    $files = $_FILES["file"];
    $files = is_array($files) ? $files : array( $files );
    $fileName = uploadFile($files["tmp_name"]);
  }else {
    $fileName = "false";
  }


  $filtered = array_map('map_entities', $_POST);
  $db = connect();
  $selectSql = "INSERT INTO contact_artist (artist_name, artist_number, artist_phone, artist_email, artist_youtube, artist_soundcloud, artist_demo, artist_type, artist_adress) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9)";
  $result =  pg_query_params($db, $selectSql, array($_POST['artistName'], $_POST['memberNumber'], $_POST['phone'], $_POST['mail'], $_POST['youtube'], $_POST['soundcloud'], $fileName, $_POST['musicType'], $_POST['adress']));

?>
