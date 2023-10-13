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