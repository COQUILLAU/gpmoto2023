<?php
if (isset($_GET['id_circuit'])) {
    $id_circuit = $_GET['id_circuit'];
    $nomGP = $_GET['nomGP'];
}

$requete = "SELECT * FROM circuit WHERE id = :id_circuit";
$sth = $connexion->prepare($requete);
$sth->bindParam(':id_circuit', $id_circuit, PDO::PARAM_INT);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);

// Vérifiez s'il y a des résultats
if (count($lignes) > 0) {
    $nomCircuit = $lignes[0]['nom'];
} else {
    // Gérez ici le cas où aucun résultat n'a été trouvé.
    $nomCircuit = "Circuit non trouvé";
}

$requete_supprimer1 = "DELETE FROM `course` WHERE `id` = " . $_GET['id_course'] . ";";

    try{
        $sth1 = $connexion->prepare($requete_supprimer1);
        $sth1->execute();
        header('Location: index.php?action=course&id_circuit=' . $id_circuit . '&nomCircuit=' . $nomCircuit);
    }catch(PDOException $e){
        echo "Une erreur est survenue";
    }
?>