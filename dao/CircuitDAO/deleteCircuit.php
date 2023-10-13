<?php
$requete_supprimer1 = "DELETE FROM `circuit` WHERE `id` = " . $_GET['id_circuit'] . ";";

    try{
        $sth1 = $connexion->prepare($requete_supprimer1);
        $sth1->execute();
        header('Location: index.php?action=circuit');
    }catch(PDOException $e){
        echo "Une erreur est survenue";
    }
?>