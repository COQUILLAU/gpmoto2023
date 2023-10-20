<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the updated data from the form
    $nom = $_POST['nom'];
    $pays = $_POST['pays'];
    $modeleMoto = $_POST['modeleMoto'];
    $idPilote1 = $_POST['idPilote1'];
    $idPilote2 = $_POST['idPilote2'];
    $id_team = $_POST['id_team'];
    
    // Requête permettant la modification des informations dans la table team
    $requete = "UPDATE team SET libelle = :nom, pays = :pays, modeleMoto = :modeleMoto, idPilote1 = :idPilote1, idPilote2 = :idPilote2 WHERE id = :id_team";
    $sth = $connexion->prepare($requete);
    
    $sth->bindParam(':nom', $nom, PDO::PARAM_STR);
    $sth->bindParam(':pays', $pays, PDO::PARAM_STR);
    $sth->bindParam(':modeleMoto', $modeleMoto, PDO::PARAM_STR);
    $sth->bindParam(':idPilote1', $idPilote1, PDO::PARAM_INT);
    $sth->bindParam(':idPilote2', $idPilote2, PDO::PARAM_INT);
    $sth->bindParam(':id_team', $id_team, PDO::PARAM_INT);

    if ($sth->execute()) {
        // Redirigez l'utilisateur après la mise à jour
        header('Location: index.php?action=team');
        exit;
    } else {
        // Gérer l'erreur
        echo "Erreur lors de la mise à jour de l'équipe.";
    }
} else {
    // Traitez le cas où la méthode HTTP n'est pas POST
    echo "La requête n'est pas de type POST.";
}
?>