<?php
$requete = "SELECT * FROM nationaliteparam;";
$sth = $connexion->prepare($requete);
$sth->execute();
$nationalites = $sth->fetchAll(PDO::FETCH_ASSOC);
?>