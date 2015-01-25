<?php
session_start();
require_once '../includes.php';
require_once HTML . '_templates/header.php';
?>

		<div class="container">
			<table>
				<form method="POST" action="resolution.php">
				<br><br>
				<strong>Matrice A :</strong>
	<?php
		//$_SESSION['ligA'] = $_POST['nA'];
		$_SESSION['taille'] = $_POST['eva'];
		
				for($i = 0; $i <$_POST['eva']; $i++){?>
					<tr>							
	<?php 
					for($j = 0; $j <$_POST['eva']; $j++){?>
						<td><input type="number" name="matrixA[]" required ></td>
	<?php           }?>
					</tr>
	<?php 		}?>
				</table><br/>
					<table class="vecteurY">
					<strong>Vecteur Y :</strong><br/>
					<td>							
	<?php 
					for($j = 0; $j <$_POST['eva']; $j++){?>
						<tr><input type="number" name="vecteurY[]" required ></tr>
	<?php           }?>
					
				<td><button type="submit" class="btn btn-default">Envoyer</button></td>		
			</table>
			</form>
		</div>
		
<?php require_once HTML . '_templates/footer.php'; ?>