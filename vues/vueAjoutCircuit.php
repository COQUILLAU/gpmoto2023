<?php
// Préparez une requête select nationnalite
include 'dao/NationnaliteDAO/selectNationnalite.php';
?>

<form action="index.php?action=ajoutCircuit" method="POST">
    <h2>Ajouter un Circuit</h2><br>

    <div class="affichage">
        <label>Nom du Circuit</label>
        <input name="nom" type="text" required>
    </div>

    <div class="affichage">
        <label>Pays</label>
        <select name="pays">
            <?php foreach ($nationalites as $nationalite) { ?>
                <option value="<?php echo $nationalite['pays']; ?>">
                    <?php echo $nationalite['pays']; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="affichage">
        <label>Année</label>
        <input name="annee" type="number" required min="1900" max="2099">
    </div>

    <div class="affichage">
        <label>Longueur</label>
        <input name="longueur" type="number" required>
    </div>

    <div class="bouton_position"> <!-- J'ai corrigé la classe "bouton_possition" en "bouton_position" -->
        <button type="submit">Ajouter</button> <!-- J'ai corrigé "Ajoutez" en "Ajouter" -->
    </div>
</form>