<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated data from the form
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $nationalite = $_POST['nationalite'];
    $date_naissance = $_POST['date_naissance'];
    $idTeam = $_POST['idTeam'];
    $id_pilote = $_POST['id_pilote'];
}

 // Requête permettant la modification des informations dans la table pilote
 $requete = "UPDATE pilote SET nom = '$nom', prenom = '$prenom', nationalite = '$nationalite',
 dateNaiss = '$date_naissance', idTeam = '$idTeam' WHERE id = '$id_pilote'";
  $sth = $connexion->prepare($requete);
  $sth->execute();
  header('Location: index.php?action=pilotes');
?>