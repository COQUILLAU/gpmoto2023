<?php
if (isset($_GET['id_circuit'])) {
    $id_circuit = $_GET['id_circuit'];
    $nomGP = $_GET['nomGP'];
}

$requete_supprimer1 = "DELETE FROM `course` WHERE `id` = " . $_GET['id_course'] . ";";

    try{
        $sth1 = $connexion->prepare($requete_supprimer1);
        $sth1->execute();
        header('Location: index.php?action=course&id_circuit=' . $id_circuit . '&nomGP=' . $nomGP);
    }catch(PDOException $e){
        echo "Une erreur est survenue";
    }
?>