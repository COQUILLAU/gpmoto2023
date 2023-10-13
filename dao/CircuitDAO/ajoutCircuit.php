<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifiez chaque variable que vous voulez tester avec isset
    if (isset($_POST['libelle'], $_POST['pays'])) {
        // Toutes les variables sont définies, vous pouvez les utiliser en toute sécurité
        $libelle = $_POST['libelle'];
        $pays = $_POST['pays'];

        // Assurez-vous de traiter correctement ces données pour éviter les failles de sécurité.

        // Préparez la requête d'insertion
        $requeteInsert = "INSERT INTO circuit (libelle, pays) 
        VALUES (:libelle, :pays)";
        $requeteSQL = $connexion->prepare($requeteInsert);
        
        // Assurez-vous de lier les paramètres correctement, avec les bonnes valeurs
        $requeteSQL->execute(array(
            'libelle' => $libelle,
            'pays' => $pays
        ));

        // Redirigez l'utilisateur après l'insertion
        header('Location: index.php?action=circuit');
    } else {
        // Une ou plusieurs variables n'ont pas été définies, vous pouvez gérer ici les erreurs ou afficher un message d'erreur à l'utilisateur.
        echo "Veuillez remplir tous les champs du formulaire.";
    }
}
?>