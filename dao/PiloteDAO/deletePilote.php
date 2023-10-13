<?php
$requete_supprimer1 = "DELETE FROM `Pilote` WHERE `id` = " . $_GET['id_Pilote'] . ";";

    try{
        $sth1 = $connexion->prepare($requete_supprimer1);
        $sth1->execute();
        header('Location: index.php?action=pilote');
    }catch(PDOException $e){
        echo "Une erreur est survenue";
    }
?>