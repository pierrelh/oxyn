<?php

  function connect(){
    $db_url = getenv("DATABASE_URL") ?: "postgres://user:pass@host:port/dbname";
    $db = pg_connect($db_url);
    if($db){
      return $db;
    }else {
        die('Erreur : '.$e->getMessage());
    }

  }

?>
