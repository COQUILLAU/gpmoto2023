<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez chaque variable que vous voulez tester avec isset
    if (isset($_POST['nom'], $_POST['pays'], $_POST['annee'], $_POST['longueur'])) {
        // Toutes les variables sont définies, vous pouvez les utiliser en toute sécurité
        $nom = $_POST['nom'];
        $pays = $_POST['pays'];
        $annee = $_POST['annee'];
        $longueur = $_POST['longueur'];

        // Assurez-vous de traiter correctement ces données pour éviter les failles de sécurité.

        // Préparez la requête d'insertion
        $requeteInsert = "INSERT INTO circuit (nom, pays, annee, longueur) 
        VALUES (:nom, :pays, :annee, :longueur)";
        $requeteSQL = $connexion->prepare($requeteInsert);
        
        // Assurez-vous de lier les paramètres correctement, avec les bonnes valeurs
        $requeteSQL->execute(array(
            'nom' => $nom,
            'pays' => $pays,
            'annee' => $annee,
            'longueur' => $longueur
        ));

        // Redirigez l'utilisateur après l'insertion
        header('Location: index.php?action=circuit');
    } else {
        // Une ou plusieurs variables n'ont pas été définies, vous pouvez gérer ici les erreurs ou afficher un message d'erreur à l'utilisateur.
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>