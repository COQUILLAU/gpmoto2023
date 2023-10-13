<?php

// Préparez une requête select 

$requete = "SELECT * FROM pilotes;";
$sth = $connexion->prepare($requete);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);


// Récupérer les données du formulaire
$prenom = isset($_POST['prenom']) ? $_POST['prenom'] : '';
$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$date_naissance = isset($_POST['date_naissance']) ? $_POST['date_naissance'] : '';
$nationalite = isset($_POST['nationalite']) ? $_POST['nationalite'] : '';

// Assurez-vous que vous avez une connexion PDO active avant d'exécuter des requêtes
// Assumons que vous avez déjà défini votre connexion PDO dans une variable nommée "$bdd"

// Préparez la requête d'insertion
$requeteInsert = "INSERT INTO pilotes (prenom, nom, date_naissance, nationalite) 
                 VALUES (:prenom, :nom, :date_naissance, :nationalite)";
$requeteSQL = $connexion->prepare($requeteInsert); // Utilisez la variable $requeteInsert
$requeteSQL->execute(array(
    'prenom' => $prenom,
    'nom' => $nom,
    'date_naissance' => $date_naissance,
    'nationalite' => $nationalite
));
?>