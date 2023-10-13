<?php
// Préparez une requête select 

    $requete = "SELECT * FROM team;";
    $sth = $connexion->prepare($requete);
    $sth->execute();
    $lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
?>