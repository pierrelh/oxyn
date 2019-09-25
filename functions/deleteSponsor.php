<?php
  include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
  $db = connect();
  $res = pg_delete($db, 'contact_sponsor', $_POST);
?>
