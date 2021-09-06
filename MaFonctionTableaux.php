<html>
	<header>
		<link rel="stylesheet" href="assets/style/Tableaux.css">
	</header>

<?php

function MonTableaux($rows, $headers) {
		?>
	
		<table id="customers">
		    <tr>
		    <?php foreach ($headers as $header): ?>
		        <th><?php echo $header; ?></th>
		    <?php endforeach; ?>
		    </tr>

			<?php foreach ($rows as $row): ?>
			    <tr>
			    <?php for ($k = 0; $k < count($headers); $k++): ?>
			    	<?php if ($k == 0){ ?>
			    		<td><?php echo '<a href=MonFormulaireUtilisateurs.php?id='.$row[$k].' >'.$row[$k].'</a>'; ?></td>
			    	<?php } else { ?>
			    		<td><?php echo $row[$k]; ?></td>
			    	<?php } ?>
			        
			    <?php endfor; ?>
			    </tr>
			<?php endforeach; ?>

		</table>
		<?php

}

function getHeaderTable() {
	$headers = array();
	$headers[] = "ID";
	$headers[] = "Nom";
	$headers[] = "Prenom";
	$headers[] = "Äge";
	$headers[] = "Sexe";
	$headers[] = "Adresse";
	return $headers;
}


?>

</html>
