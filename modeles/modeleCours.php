<?php

function get_liste_cours() {
    global $dbh;
    $sql = "SELECT id, nom FROM cours ORDER BY id DESC";
    $sth = $dbh->query($sql);

    if ($sth === FALSE) {
        return FALSE;
    } else {
        $les_cours = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $les_cours;
    }
}
