<?php

    function getBar(){
        include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
        $db = connect();
        $result = pg_query($db, "SELECT * FROM contact_bar");
        if (!$result) {
            echo "Une erreur est survenue.\n";
            exit;
        }
        $val = pg_fetch_all($result);
        return $val;
    }

?>
