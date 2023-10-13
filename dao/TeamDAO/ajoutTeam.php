<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez chaque variable que vous voulez tester avec isset
    if (isset($_POST['libelle'], $_POST['pays'], $_POST['modele_moto'], $_POST['pilote1'], $_POST['pilote2'])) {
        // Toutes les variables sont définies, vous pouvez les utiliser en toute sécurité
        $libelle = $_POST['libelle'];
        $pays = $_POST['pays'];
        $modele_moto = $_POST['modele_moto'];
        $pilote1 = $_POST['pilote1'];
        $pilote2 = $_POST['pilote2'];

        // Assurez-vous de traiter correctement ces données pour éviter les failles de sécurité.

        // Préparez la requête d'insertion
        $requeteInsert = "INSERT INTO team (libelle, pays, modeleMoto, idPilote1, idPilote2) 
        VALUES (:libelle, :pays, :modele_moto, :pilote1, :pilote2)";
        $requeteSQL = $connexion->prepare($requeteInsert);
        
        // Assurez-vous de lier les paramètres correctement, avec les bonnes valeurs
        $requeteSQL->execute(array(
            'libelle' => $libelle,
            'pays' => $pays,
            'modele_moto' => $modele_moto,
            'pilote1' => $pilote1,
            'pilote2' => $pilote2
        ));

        // Redirigez l'utilisateur après l'insertion
        header('Location: index.php?action=team');
    } else {
        // Une ou plusieurs variables n'ont pas été définies, vous pouvez gérer ici les erreurs ou afficher un message d'erreur à l'utilisateur.
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>