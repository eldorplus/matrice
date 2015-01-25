<!DOCTYPE html PUBLIC "-//w3c//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
if ($request->segment(1) == "actions" or $request->segment(1) == "operations" or $request->segment(1) == "gauss" or $request->segment(1) == "matrice")
	include_once '../includes.php';
else
	include_once 'includes.php';
?>
<html xmlns="http://www.w3.org/2014/xhtml" lang="fr">

	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo SRC . 'css/bootstrap.css';  ?>">
		<link rel="stylesheet" type="text/css" href="<?= SRC . 'css/bootstrap-responsive.css';  ?>">
		
		<title>MATRICE <?php echo ($request->title() == "")? "- Page d'Accueil" : "- ". $request->title(); ?></title>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	</head>

	<body data-target=".bs-docs-sidebar" data-spy="scroll" data-twttr-rendered="true">
	<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?= HOSTNAME ?>">Projet Matrice</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="">
                <a href="<?= HOSTNAME . 'actions/matrice.php'; ?>">Matrice</a>
              </li>
              <li class="">
                <a href="<?= HOSTNAME . 'actions/gauss.php'; ?>">Gauss</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php
		include_once '_index.php';
	?>