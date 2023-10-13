<?php
// Préparez une requête select
$requete = "SELECT * FROM pilote;";
$sth = $connexion->prepare($requete);
$sth->execute();
$pilotes = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="index.php?action=ajoutTeam" method="POST">
    <h2>Ajouter une Team</h2><br>

    <div class="affichage">
        <label>Nom d'équipe</label>
        <input name="libelle" type="text" required>
    </div>

    <div class="affichage">
        <label>Pays</label>
        <input name="pays" type="text" required>
    </div>

    <div class="affichage">
        <label>Modele de Moto</label>
        <input name="modele_moto" type="text" required>
    </div>

    <div class="affichage">
        <label>Pilote 1</label>
        <select name="pilote1">
            <?php
            foreach ($pilotes as $pilote) {
                echo "<option value='{$pilote['id']}'>{$pilote['nom']}</option>";
            }
            ?>
        </select>
    </div>

    <div class="affichage">
        <label>Pilote 2</label>
        <select name="pilote2">
            <?php
            foreach ($pilotes as $pilote) {
                echo "<option value='{$pilote['id']}'>{$pilote['nom']}</option>";
            }
            ?>
        </select>
    </div>

    <div>
        <button type="submit">Ajoutez</button>
    </div>
</form>