<form action="index.php?action=ajoutCircuit" method="POST">
	<h2>Ajouter un Circuit</h2><br>


	<div class="affichage">
		<label>Nom du Circuit</label>
		<input name="libelle" type="text" required>
    </div>

	<div class="affichage">
		<label>Pays</label>
		<input name="pays" type="text" required>
    </div>
	
	<div class="bouton_possition">
		<button type="submit">Ajoutez</button>
	</div>
</form>