
<?php

if (isset($_GET['nom']) && isset($_GET['prenom'])) {
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
}

include('index.php?action=nationnalite');


?>

<form action="index.php?action=ajoutPilote" method="POST">
	<h2>Modifier le Pilote :</h2><br>
    <h2><?php echo $nom , ' ', $prenom;?></h2>

	<div class="affichage">
		<label>Nom</label>
		<input value="<?php echo $nom?>" name="nom" type="text" required>
	</div>

	<div class="affichage">
		<label>Prénom </label>
		<input value="<?php echo $prenom?>" name="prenom" type="text" required>
	</div>

	<div class="affichage">
		<label>Nationalité</label>
		<select name="nationalite">
			<?php foreach ($nationalites as $nationalite) { ?>
				<option value="<?php echo $nationalite['libelle']; ?>">
					<?php echo $nationalite['libelle']; ?>
				</option>
			<?php } ?>
		</select>
	</div>

	<div class="affichage">
		<label>Date de naissance </label>
		<input name="date_naissance" type="date" required>
	</div>

	<div>
		<button type="submit">Ajouter</button>
	</div>
</form>