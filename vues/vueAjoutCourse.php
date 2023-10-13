<?php
if (isset($_GET['id_circuit'])) {
    $id_circuit = $_GET['id_circuit'];
}
?>

<form action="index.php?action=ajoutCourse&id_circuit=<?php echo $id_circuit ?>" method="POST">
	<h2>Ajouter une course</h2><br>


	<div class="affichage">
		<label>Nom GP</label>
		<input name="nom_GP" type="text" required>
    </div>
    
    <div class="affichage">
        <label>Date de la course </label>
        <input name="date_course" type="date" required>
    </div>

	<div>
		<button type="submit">Ajoutez</button>
	</div>
</form>