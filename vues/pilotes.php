<?php
include "controller/PiloteController.php";
?>
<h1>Liste des pilotes</h1>

	<table>
		<thead>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Nationnalite</th>
			<th>Date de Naissance</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		<tr>
			<td><?php echo $ligne['id']?></td>
			
		</tr>
	</table>
<form action="index.php?action=piloteCrud" method="POST">
	<h2>Ajouter un Pilote</h2><br>

	<div class="affichage">
		<label>Prénom </label>
		<input name="prenom" type="text" required>
	</div>

	<div class="affichage">
		<label>Nom</label>
		<input name="nom" type="text" required>
    </div>

    <div class="affichage">
        <label>Date de naissance </label>
        <input name="date_naissance" type="date" required>
    </div>

    <div class="affichage">
        <label>Nationnalite</label>
        <select name="nationalite">
            <option value="fr">Francais</option>
            <option value="ang">Anglais</option>
        </select>
    </div>
	
	<div>
		<button type="submit">Ajoutez</button>
	</div>
</form>
