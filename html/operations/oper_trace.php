<?php
	session_start();
	require_once '../includes.php';
	require_once HTML . '_templates/header.php';
	$lignA = $_SESSION['ligA'];

	
	foreach ($_POST['matrixA'] as $value){
		$tabA[] = $value;
	}
	 $trace = 0;
	$matrxA = array();
	$k = 0;
	for($i = 0; $i < $lignA; $i++){
		for($j = 0; $j < $lignA; $j++){
			$matrixA[$i][$j] = $tabA[$k++];
		}
	}

	for($i = 0; $i < $lignA; $i++){
		for($j = 0; $j < $lignA; $j++){
			if($i == $j)
				$trace += $matrixA[$i][$j];
		}
	}
	echo '<div class="container">';
	echo '<div class="bs-alert-old-docs">';
	
	echo "Trace : ". $trace;
	?>
	<p><br /> Cliquer <a href="<?= HOSTNAME ?>"><strong>ici</strong></a> pour revenir au menu</p>
<?php
	echo '</div>';
	echo '</div>';

	require_once HTML . '_templates/footer.php';
?>
	
	