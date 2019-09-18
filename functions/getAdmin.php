<?php
  include_once ($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");

  function adminConnexion(){
    $db = connect();
    $selectSql = "SELECT * FROM admin_account WHERE account_email = $1 AND account_password = $2";
    $result =  pg_query_params($db, $selectSql, array($_POST['adminLogin'], md5($_POST['adminPassword'])));
    $row = pg_fetch_result($result, 0, 0);
    if ($row === false) {
      echo "<p class='error-msg'>Ce compte n'a pas été trouvé.</p>";
    }else {
      require '../vendor/autoload.php';
      $client = new Predis\Client($_SERVER['REDIS_URL']);
      $client->set("session_" . $row, $row);
      setcookie("SESSION_ID", $row, time()+3600);
      echo "<script type='text/javascript'>window.location.assign('./pages/');</script>";
    }
  }

  function checkUser(){
    if(isset($_COOKIE['SESSION_ID'])){
      $sessionId = $_COOKIE['SESSION_ID'];
      $key = "session_" . $sessionId;
      require($_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php');
      $client = new Predis\Client($_SERVER['REDIS_URL']);
      $id = $client->get($key);
      $res = ['data'=>json_decode($id)];
    }else{
      header("Location:https://".$_SERVER['HTTP_HOST']."/back");
    }
  }

?>
