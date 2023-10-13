<?php
$requete_supprimer1 = "DELETE FROM `course` WHERE `id` = " . $_GET['id_course'] . ";";

    try{
        $sth1 = $connexion->prepare($requete_supprimer1);
        $sth1->execute();
        header('Location: index.php?action=course');
    }catch(PDOException $e){
        echo "Une erreur est survenue";
    }
?>