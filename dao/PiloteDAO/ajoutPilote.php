<?php

// Récupérer les données du formulaire
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : '';
$nationalite = isset($_POST['nationalite']) ? $_POST['nationalite'] : '';
$idTeam = 0;

// Assurez-vous que vous avez une connexion PDO active avant d'exécuter des requêtes
// Assumons que vous avez déjà défini votre connexion PDO dans une variable nommée "$connexion"

// Préparez la requête d'insertion
$requeteInsert = "INSERT INTO pilote (nom, prenom, dateNaiss, nationalite, idTeam) 
                 VALUES (:nom, :prenom, :date_naissance, :nationalite, :idTeam)";
$requeteSQL = $connexion->prepare($requeteInsert); // Utilisez la variable $requeteInsert
$requeteSQL->execute(array(
    'prenom' => $prenom,
    'nom' => $nom,
    'date_naissance' => $date_naissance,
    'nationalite' => $nationalite,
    'idTeam' => $idTeam // Assurez-vous de lier la valeur 'idTeam' ici
));
header('Location: index.php?action=pilotes');

?>