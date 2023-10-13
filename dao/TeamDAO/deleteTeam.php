<?php
$requete_supprimer1 = "DELETE FROM `team` WHERE `id` = " . $_GET['id_team'] . ";";

    try{
        $sth1 = $connexion->prepare($requete_supprimer1);
        $sth1->execute();
        header('Location: index.php?action=team');
    }catch(PDOException $e){
        echo "Une erreur est survenue";
    }
?>