<?php
	session_start();
	require_once '../includes.php';
	require_once HTML . '_templates/header.php';
	$lignA = $_SESSION['ligA'];
	$colA = $_SESSION['colA'];
	$lignB = $_SESSION['ligB'];
	$colB = $_SESSION['colB'];
	
	foreach ($_POST['matrixA'] as $value){
		$tabA[] = $value;
	}
	foreach ($_POST['matrixB'] as $value){
		$tabB[] = $value;
	}
	 $produit = array();
	 $matrxA = array();
	 $matrixB = array();
	$k = 0;
	for($i = 0; $i < $lignA; $i++){
		for($j = 0; $j < $colA; $j++){
			$matrixA[$i][$j] = $tabA[$k++];
		}
	}
	$k = 0;
	for($i = 0; $i < $lignB; $i++){
		for($j = 0; $j < $colB; $j++){
			$matrixB[$i][$j] = $tabB[$k++];
		}
	}
	echo '<div class="container">';
	echo '<div class="bs-alert-old-docs">';
	echo "produit : ";
?>	
	<table class="table table-bordered">
	<?php for($i = 0; $i < $lignA; $i++){?>
	<tr>
	<?php	for($j = 0; $j < $colB; $j++){
				$produit[$i][$j] = 0;
				for($k = 0; $k < $colA; $k++){?>
					<?php $produit[$i][$j] += $matrixA[$i][$k] * $matrixB[$k][$j];}?>
			<td><?php
				echo $produit[$i][$j];?></td>
			<?php }?>
	</tr>
		<?php }?>
	 </table>
	 </div>
	 <p><br /> Cliquer <a href="<?= HOSTNAME ?>"><strong>ici</strong></a> pour revenir au menu</p>
	</div>
<?php require_once HTML . '_templates/footer.php'; ?>