<?php

    function getSponsor(){
        include_once($_SERVER['DOCUMENT_ROOT']."/functions/connexion.php");
        $db = connect();
        $result = pg_query($db, "SELECT * FROM contact_sponsor");
        if (!$result) {
            echo "Une erreur est survenue.\n";
            exit;
        }
        $val = pg_fetch_all($result);
        return $val;
    }

?>
