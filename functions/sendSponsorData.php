<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
  function map_entities($str) {
    return htmlentities($str, ENT_QUOTES);
  }
  $filtered = array_map('map_entities', $_POST);
  $db = connect();
  $selectSql = "INSERT INTO contact_sponsor (sponsor_name, sponsor_email, sponsor_phone, sponsor_message) VALUES ($1, $2, $3, $4)";
  $result =  pg_query_params($db, $selectSql, array($_POST['brandName'], $_POST['mail'], $_POST['phone'], $_POST['motivation']));

  // while ($row = pg_fetch_row($result)) {
  //     var_dump($row);
  // }

?>
