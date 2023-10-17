<?php
// Préparez une requête select nationnalite

include 'dao/NationnaliteDAO/selectNationnalite.php' ;

?>

<form action="index.php?action=ajoutPilote" method="POST">
	<h2>Ajouter un Pilote</h2><br>

	<div class="affichage">
		<label>Nom</label>
		<input name="nom" type="text" required>
	</div>

	<div class="affichage">
		<label>Prénom </label>
		<input name="prenom" type="text" required>
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

	<div class="bouton_possition">
		<button type="submit">Ajouter</button>
	</div>
</form>