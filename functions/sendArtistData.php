<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
  // include_once($_SERVER['DOCUMENT_ROOT']."/cloudinary/autoload.php");
  // include_once($_SERVER['DOCUMENT_ROOT']."/cloudinary/src/Helpers.php");

// CLOUDINARY_URL=cloudinary://534388718329294:6xc8So-_G2W4ObEc7rwk4wQwzlY@hjahvnzhc


  function map_entities($str) {
    return htmlentities($str, ENT_QUOTES);
  }

  // if ( 0 < $_FILES['file']['error'] ) {
  //     $fileData = "false";
  // }else {
    include_once($_SERVER['DOCUMENT_ROOT']."/settings.php");
    // $fileData = \Cloudinary\Uploader::upload($_FILES['file']['tmp_name'],
    //             array("resource_type" => "video"));
\Cloudinary\Uploader::upload($_FILES['file']['tmp_name'],
                      array("folder" => "oxyn-folder/user-demo/", "public_id" => "my_dog", "overwrite" => TRUE,
                      "notification_url" => "https://stagingoxyn.herokuapp.com", "resource_type" => "auto"))

  // }

  // $file = $_FILES;
  // if (empty($file) || $file == null) {
  //   $isFile = "false";
  // }else {
  //   $isFile = "true";
  // }

  // $filtered = array_map('map_entities', $_POST);
  // $db = connect();
  // $selectSql = "INSERT INTO contact_artist (artist_name, artist_number, artist_phone, artist_email, artist_youtube, artist_soundcloud, artist_demo, artist_type, artist_adress) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9)";
  // $result =  pg_query_params($db, $selectSql, array($_POST['artistName'], $_POST['memberNumber'], $_POST['phone'], $_POST['mail'], $_POST['youtube'], $_POST['soundcloud'], 'default_value', $_POST['musicType'], $_POST['adress']));

?>
