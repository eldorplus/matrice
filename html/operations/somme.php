<?php
	require_once '../includes.php';
	session_start();
	require_once HTML . '_templates/header.php';
	$_SESSION['ligA'] = $_POST['nA'];
	$_SESSION['colA'] = $_POST['mA'];
	$_SESSION['ligB'] = $_POST['nB'];
	$_SESSION['colB'] = $_POST['mB'];
?>
<div class="container">
	<div class="bs-alert-old-docs">
	<?php	 if (($_POST['nA'] == $_POST['nB']) && ($_POST['mA'] == $_POST['mB'])){?>
			<form method="POST" action="oper_somme.php">
				<table>
				<strong>Matrice A :</strong>
	<?php			
				for($i = 0; $i < $_POST['nA']; $i++){?>
					<tr>							
	<?php 
					for($j = 0; $j < $_POST['mA']; $j++){?>
						<td><input type="number" name="matrixA[]" required ></td>
	<?php           }?>
					</tr>
	<?php 		}?>
			
				</table>
				<br>
				<table>
				<strong>Matrice B :</strong>
	<?php 		for($i = 0; $i < $_POST['nB']; $i++){?>
					<tr>
	<?php 			for($j = 0; $j < $_POST['mB']; $j++){?>
						<td><input type="number" name="matrixB[]"></td>
	<?php 			}?>
					</tr>
	<?php		}?>
				<td>
				<br>
				<button type="submit" class="btn btn-default">Envoyer</button></td>		
			</table>
			</form>
			<?php }
				else{
					echo "désolé, les deux matrice doivent être de même dimension";?>
					<p><br /> Cliquer <a href="<?= HOSTNAME ?>"><strong>ici</strong></a> pour revenir au menu</p>
			<?php		
				}
			?>
	</div>
</div>
<?php require_once HTML . '_templates/footer.php'; ?>

	