<?php
 require_once('includes.php');
 require_once HTML . '_templates/header.php';
?>
<div class="container">
    <div class="row bs-alert-old-docs">
      <div class="span12">
        <center>
	        <h2>Que voulez-vous faire ?</h2>
	        <div class="btn-toolbar">
		        <p class="lead">
		        	<a href="<?= HOSTNAME . 'actions/matrice.php'; ?>" class="btn btn-primary btn-large">Matrice</a> ou <a href="<?= HOSTNAME . 'actions/gauss.php'; ?>" class="btn btn-primary btn-large">Gauss</a>
		        </p>
		    </div>
	    </center>
      </div>
    </div>
</div>
<?php require_once HTML . '_templates/footer.php'; ?>