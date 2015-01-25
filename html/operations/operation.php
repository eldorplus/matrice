<?php 
require_once '../includes.php';
require_once HTML . '_templates/header.php'; ?>
<br>
<div class="container">
	<div class="bs-alert-old-docs">
	<?php
		if ($_POST['choix'] == 1)
		{
			echo "<legend>Vous avez choisi  la de faire la somme de deux matrices<br />";
			echo "Veuillez renseigner les champs suivants: </legend>";
	?>		
	<form method="POST" action="somme.php">
			
		<table>	
			<h4>
					<tr
						<?php
							echo "juste pour un test <br />";
						?>
						
						<strong>Matrice A :</strong>
						<td>
							Nombre de ligne (n) : <input type="number" name="nA" min="1" max="5" required class="input-small">
							Nombre de colonne (m) : <input type="number" name="mA" min="1" max="5" required class="input-small"><br />
						</td>
					</tr>
				</h4>
			</table>
			<p></p>
			<table>
					<tr>
						<strong>Matrice B :</strong>
						<td>
							Nombre de ligne (n):<input type="number"  name="nB" min="1" max="5" required class="input-small">
							Nombre de colonne (m):<input type="number" name="mB" min="1" max="5" required class="input-small"><br />
						</td>
					</tr>
			</table>
			<td><button type="submit" class="btn btn-default">Envoyer</button></td>
			</form>			
<?php 			} 
				elseif ($_POST['choix'] == 2){
					echo '<legend>Vous avez choisi  la de faire la produit de deux matrices'."<br />";
					echo "Veuillez renseigner les champs suivants: </legend>";
			?>		
			<form method="POST" action="produit.php">
			
			<table>
				<h4>
					<tr>
						<strong>Matrice A :</strong>
						<td>
							Nombre de ligne (n) : <input type="number" name="nA" min="1" max="5" required class="input-small">
							Nombre de colonne (m) : <input type="number" name="mA" min="1" max="5" required class="input-small"><br />
						</td>
					</tr>
				</h4>
			</table>
			<p></p>
			<table>
					<tr>
						<strong>Matrice B :</strong>
						<td>
							Nombre de ligne (n) : <input type="number" name="nB" size ="1" min="1" max="5" required class="input-small">
							Nombre de colonne (m) : <input type="number" name="mB" size ="1" min="1" max="5" required class="input-small"><br />
						</td>
					</tr>
			</table>
			<td><button type="submit" class="btn btn-default">Envoyer</button></td>
			</form>			
<?php 			} elseif ($_POST['choix'] == 3){
					echo '<legend>Vous avez choisi  la de faire la transposée de la matrice A'."<br />";
					echo "Veuillez renseigner les champs suivants: <br /></legend>";
			?>		
			<form method="POST" action="transposee.php">		
			<div>
				<strong>Matrice A :</strong>
							Nombre de ligne (n) : <input type="number" name="nA" min="1" max="5" required class="input-small">
							Nombre de colonne (m) : <input type="number" name="mA" min="1" max="5" required class="input-small"><br />
						</td>
					</tr>
				</h4>
			</div>
			<td><button type="submit" class="btn btn-default">Envoyer</button></td>
			</form>

<?php 			}  elseif ($_POST['choix'] == 4){
					echo '<legend>Vous avez choisi  la de faire la trace de la matice A'."<br />";
					echo "Veuillez renseigner les champs suivants: </legend>";
			?>		
			<form method="POST" action="trace.php">
			<fieldset>
			<div class="span6">
				<div class="row-fluid">
						<div class="span6"><strong>Matrice A :</strong></div>
						<div class="row-fluid">
							<label class="span6">
							Entrez l'ordre de la matrice A :
							<input type="number" name="nA" min="1" max="5" required class="input-small">
							</label> 
						</div>
				</div>
			</div>
			<button type="submit" class="btn btn-default">Envoyer</button>
			</fieldset>
			</form>			
<?php 			} 
			?>
	</div>
</div>
<?php require_once HTML . '_templates/footer.php'; ?>