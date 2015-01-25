<?php
	session_start();
	require_once '../includes.php';
	require_once HTML . '_templates/header.php';
	$lignA = $_SESSION['ligA'];
	$colA = $_SESSION['colA'];
	
	foreach ($_POST['matrixA'] as $value){
		$tabA[] = $value;
	}
	
	
	 $transpose = array();
	 $matrxA = array();
	$k = 0;
	for($i = 0; $i < $lignA; $i++){
		for($j = 0; $j < $colA; $j++){
			$matrixA[$i][$j] = $tabA[$k++];
		}
	}
	$indx = ($lignA > $colA)? $lignA : $colA; 
	for($i = 0; $i < $indx; $i++){
		for($j = 0; $j < $i; $j++){
			$transp = $matrixA[$i][$j];
			$matrixA[$i][$j] = $matrixA[$j][$i];
			$matrixA[$j][$i] = $transp;
		}
	}
	echo '<div class="container">';
	echo '<div class="bs-alert-old-docs">';
	echo "Transposée : "
	?>
	
	<table class="table table-bordered">
		<?php for($i = 0; $i < $colA; $i++){?>
			<tr>
				<?php for($j = 0; $j < $lignA; $j++){?>
				<td> 
					<?php echo $matrixA[$i][$j];?>
				</td>
			  <?php  } ?>
			</tr>
	  <?php	}?>
	 </table>
	 </div>
	 <p><br /> Cliquer <a href="<?= HOSTNAME ?>"><strong>ici</strong></a> pour revenir au menu</p>
	</div>
<?php require_once HTML . '_templates/footer.php'; ?>