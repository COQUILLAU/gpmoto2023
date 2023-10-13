<?php

// Récupérer les données du formulaire
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : '';
$nationalite = isset($_POST['nationalite']) ? $_POST['nationalite'] : '';

// Préparez la requête d'insertion
$requeteInsert = "INSERT INTO pilote (nom, prenom, dateNaiss, nationalite, idTeam) 
                 VALUES (:nom, :prenom, :date_naissance, :nationalite, 0)";
$requeteSQL = $connexion->prepare($requeteInsert); 
$requeteSQL->execute(array(
    'prenom' => $prenom,
    'nom' => $nom,
    'date_naissance' => $date_naissance,
    'nationalite' => $nationalite
));
header('Location: index.php?action=pilotes');

?>