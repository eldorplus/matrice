<?php
	session_start();
	require_once '../includes.php';
	require_once HTML . '_templates/header.php';
	$_SESSION['ligA'] = $_POST['nA'];

?>
<div class="container">
	<div class="bs-alert-old-docs">
		<form method="POST" action="oper_trace.php">
			<table>
			<strong>Matrice A :</strong>
			<?php		
				for($i = 0; $i <$_POST['nA']; $i++){?>
				<tr>							
			<?php 
					for($j = 0; $j <$_POST['nA']; $j++){?>
						<td><input type="number" name="matrixA[]" required ></td>
			<?php           }?>
					</tr>
			<?php 		}?>				
				<td><button type="submit" class="btn btn-default">Envoyer</button></td>		
			</table>
			</form>
	</div>
</div>
<?php require_once HTML . '_templates/footer.php'; ?>