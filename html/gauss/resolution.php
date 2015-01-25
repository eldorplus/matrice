<?php
	session_start();
	require_once '../includes.php';
	require_once HTML . '_templates/header.php';
	$taille = $_SESSION['taille'];
	
	foreach ($_POST['matrixA'] as $value){
		$tabA[] = $value;
	}
	foreach ($_POST['vecteurY'] as $value){
		$vecteurY[] = $value;
	}
	$k = 0;
	for($i = 0; $i < $taille; $i++){
		for($j = 0; $j < $taille; $j++){
			$matrixA[$i][$j] = $tabA[$k++];
		}
	}
	echo '<div class="container">';
	echo '<div class="bs-alert-old-docs">';
?>
	
	<table class="table table-bordered">
		<?php for ($n = 0; $n <$taille; $n++){?>
			<tr>
				<?php for($m = 0; $m <$taille; $m++){?>
				<td> 
					<?php echo $matrixA[$n][$m];?>
				</td>
			  <?php  } ?>
			</tr>
	  <?php	}?>
	 </table>
	 <br/>
	 <table class="table table-bordered">
			<tr>
				<?php for($m = 0; $m <$taille; $m++){?>
				<td> 
					<?php echo $vecteurY[$m];?>
				</td>
			  <?php  } ?>
			</tr>
	 </table><br />
	 
<?php 
	$i; $j; $k;
	$min;
	$p; $sum; $valmin; $tump1; $tump2;
	
	for ($k = 0; $k < $taille - 1; $k++)
	{
		$valmin = $matrixA[$k][$k];
		$min = $k;
		for($i = $k + 1; $i < $taille; $i++)
		{
			if ($valmin != 0)
			{
				if (abs($matrixA[$i][$k]) < abs($valmin) && $matrixA[$i][$k] != 0)
				{
					$valmin = $matrixA[$i][$k];
					$min = $i;
				}
			}
			else 
			{
				$valmin = $matrixA[$i][$k];
				$min = $i;
			}
		}
	//affichage de la matrice
	
?>

<table class="table table-bordered">
		<?php for ($n = 0; $n <$taille; $n++){?>
			<tr>
				<?php for($m = 0; $m <$taille; $m++){?>
				<td> 
					<?php echo $matrixA[$n][$m];?>
				</td>
			  <?php  } ?>
			</tr>
	  <?php	}?>
	 </table>
	 <br/>
	 <table class="table table-bordered">
			<tr>
				<?php for($m = 0; $m <$taille; $m++){?>
				<td> 
					<?php echo $vecteurY[$m];?>
				</td>
			  <?php  } ?>
			</tr>
	 </table><br />

<?php	
		if ($valmin == 0.)
			$error->errorSingle("Matrice singulière");
		for ($j = 0; $j < $taille; $j++){
			$tump1 = $matrixA[$min][$j];
			$matrixA[$min][$j] = $matrixA[$k][$j];
			$matrixA[$k][$j] = $tump1;
		}
		$tump2 = $vecteurY[$min];
		$vecteurY[$min] = $vecteurY[$k];
		$vecteurY[$k] = $tump2;
		
		for ($i = $k + 1; $i < $taille; $i++){
			$p = $matrixA[$i][$k] / $matrixA[$k][$k];
			for ($j = 0; $j < $taille; $j++)
				$matrixA[$i][$j] = round($matrixA[$i][$j] - $p * $matrixA[$k][$j], 1);
			$vecteurY[$i] = round($vecteurY[$i] - $p * $vecteurY[$k], 1);
		}
	}
	
	if ($matrixA[$taille - 1][$taille - 1] == 0)
		$error->errorSingle("Matrice singulière");
?>

<?php
// Affichage de la matrice
?>
<table class="table table-bordered">
		<?php for ($n = 0; $n <$taille; $n++){?>
			<tr>
				<?php for($m = 0; $m <$taille; $m++){?>
				<td> 
					<?php echo $matrixA[$n][$m];?>
				</td>
			  <?php  } ?>
			</tr>
	  <?php	}?>
	 </table>
	 <br/>
	 <table class="table table-bordered">
			<tr>
				<?php for($m = 0; $m <$taille; $m++){?>
				<td> 
					<?php echo $vecteurY[$m];?>
				</td>
			  <?php  } ?>
			</tr>
	 </table><br />
	 
<?php

$x = array();
$x[$taille - 1] = $vecteurY[$taille - 1] / $matrixA[$taille - 1][$taille - 1];

for ($i = $taille - 2; $i > - 1; $i--)
{
	$sum = 0;
	for($j = $taille - 1; $j > $i; $j--)
	{
		$sum = $sum + $matrixA[$i][$j] * $x[$j];
	}
	$x[$i] = ($vecteurY[$i] - $sum) / $matrixA[$i][$i];
}
//afficharge des solutions
?>
<table class="table table-bordered">
		<?php $m = 0; foreach ($x as $solution):?> 
			<tr>
				<td> 
					<?php echo "X$m = ".round($solution, 1);?>
				</td>
			</tr>
	  <?php	$m++; endforeach ?>
 </table>
 </div>
</div>
 <?php require_once HTML . '_templates/footer.php'; ?>
