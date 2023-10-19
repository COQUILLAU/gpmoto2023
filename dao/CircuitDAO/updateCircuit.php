<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated data from the form
    $id_circuit = $_POST['id_circuit'];
    $nom = $_POST['nom'];
    $pays = $_POST['pays'];
    $annee = $_POST['annee'];
    $longueur = $_POST['longueur'];

    // Requête permettant la modification des informations dans la table circuit
    $requete = "UPDATE circuit SET nom = :nom, pays = :pays, annee = :annee, longueur = :longueur WHERE id = :id_circuit";
    
    // Préparez la requête SQL
    $sth = $connexion->prepare($requete);

    // Lier les paramètres
    $sth->bindParam(':nom', $nom, PDO::PARAM_STR);
    $sth->bindParam(':pays', $pays, PDO::PARAM_STR);
    $sth->bindParam(':annee', $annee, PDO::PARAM_INT);
    $sth->bindParam(':longueur', $longueur, PDO::PARAM_INT);
    $sth->bindParam(':id_circuit', $id_circuit, PDO::PARAM_INT);

    // Exécutez la requête
    $sth->execute();

    // Redirigez l'utilisateur après la modification
    header('Location: index.php?action=circuit');
}

?>