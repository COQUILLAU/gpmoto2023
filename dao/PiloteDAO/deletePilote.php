<?php
$requete_supprimer1 = "DELETE FROM `pilote` WHERE `id` = " . $_GET['id_pilote'] . ";";

    try{
        $sth1 = $connexion->prepare($requete_supprimer1);
        $sth1->execute();
        header('Location: index.php?action=pilotes');
    }catch(PDOException $e){
        echo "Une erreur est survenue";
    }
?>