<?php 
require_once '../includes.php';
require_once HTML . '_templates/header.php'; ?>
<div class="container">
	<div class="bs-alert-old-docs">
		<h3 class="container">Choisissez votre operation</h3>
		<!-- Création d'un formulaie: action correspond au fichier action et enctype pour le upload de la photo-->
		<form  method="POST" action="<?= HOSTNAME . 'operations/operation.php'; ?>">
			<label class="radio">
				Somme
				<input type="radio" name="choix" value="1" checked>
			</label>
			<label class="radio">
				Produit	
				<input type="radio" name="choix" value="2">
			</label>
			<label class="radio">
				Transposée
				<input type="radio" name="choix" value="3">
			</label>
			<label class="radio">
				Trace
				<input type="radio" name="choix" value="4">
			</label>
				<button type="submit"  class="btn btn-default">Enregistrer</button>
		</form>
	</div>
</div>
<?php require_once HTML . '_templates/footer.php'; ?>