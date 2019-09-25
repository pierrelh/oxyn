<?php

  include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
  function map_entities($str) {
    return htmlentities($str, ENT_QUOTES);
  }
  $filtered = array_map('map_entities', $_POST);
  $db = connect();
  $selectSql = "INSERT INTO contact_bar (bar_gerant, bar_email, bar_phone, bar_name, bar_scene, bar_musique, bar_asset) VALUES ($1, $2, $3, $4, $5, $6, $7)";
  $result =  pg_query_params($db, $selectSql, array($filtered['gerantName'], $filtered['mail'], $filtered['phone'], $filtered['barName'], $filtered['scene'], $filtered['musicType'], $filtered['materiel']));

?>
