<?php 
require_once '../includes.php';
require_once HTML . '_templates/header.php'; ?>

<div class="container">
	<div class="equation">
		<h3>Resolution des systemes lineaires par l'algorithme de Gauss sous la forme AX = Y</h3>
			<h4> Entrez les donnees</h4>
				<form  method="POST" action="<?= HOSTNAME . 'gauss/afficheGrille.php'; ?>">
					<h4>
						n <input type="number" name="eva"><br />				
					</h4>
					<input type="submit" name="Enregistrer" class="btn btn-default">
				</form>
		</div>
</div>
<?php require_once HTML . '_templates/footer.php'; ?>