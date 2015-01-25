<?php
	session_start();
	require_once '../includes.php';
	require_once HTML . '_templates/header.php';
	$_SESSION['ligA'] = $_POST['nA'];
	$_SESSION['colA'] = $_POST['mA'];

?>
<div class="container">
	<div class="bs-alert-old-docs">
	<?php	 if (($_POST['mA'] == $_POST['nA'])){?>
			<form method="POST" action="oper_transpose.php">
				<table class="table table-bordered">
				<strong>Matrice A :</strong>
	<?php			
				for($i = 0; $i <$_POST['nA']; $i++){?>
					<tr>							
	<?php 
					for($j = 0; $j <$_POST['mA']; $j++){?>
						<td><input type="number" name="matrixA[]" required ></td>
	<?php           }?>
					</tr>
	<?php 		}?>				
				<td><button type="submit" class="btn btn-default">Envoyer</button></td>		
			</table>
			</form>
			<?php }
				else{
					echo "désolé, la matrice doit etres carrée";?>
					<p><br /> Cliquer <a href="<?= HOSTNAME ?>"><strong>ici</strong></a> pour revenir au menu</p>
			<?php		
				}
			?>
		</div>
</div>
<?php require_once HTML . '_templates/footer.php'; ?>