<!--- Created by Ugur OZKAN(21050161003) && Bahri KESKIN(22050161001)-->

<!DOCTYPE html>

<html lang="en">
<head>
    <title>Currency Calculation</title>
    <meta name="description" content="CENG 311 Inclass Activity 5" />
	<meta name="author" content="Ugur OZKAN and Bahri KESKIN">
</head>

<body>

<?php 
	$parities = array(
		"FUSD"=>array(
			"TCAD"=>1.4273,
			"TEUR"=>0.9226,
			"TUSD"=>1.0000
		),
		"FCAD"=>array(
			"TUSD"=>0.7006,
			"TEUR"=>0.6471,
			"TCAD"=>1.0000
		),
		"FEUR"=>array(
			"TUSD"=>1.0839,
			"TCAD"=>1.5454,
			"TEUR"=>1.0000
		)
	);
	$input = 0;
	if(isset($_GET)) {
		$fromCurrency = $_GET['currencies'];
		$toCurrency = $_GET['currencies2'];
		$input = (float) $_GET['value'];
		$parity = $parities[$fromCurrency][$toCurrency];
		$result = $parity*$input;
	}
?>

	<form action = "Ozkan_Keskin_activity5.php" method="GET">
		<table>
			<tr>
				<td>
					From:
				</td>
				<td>
					<?php 
						echo '<input type="number" name="value"  step="any" value="'.($input ? $input:0).'"/>';
					?>
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="currencies">
						<option value="FUSD" <?php echo ($_GET['currencies'] == 'FUSD') ? 'selected' : '' ?> /> USD </option>
						<option value="FCAD" <?php echo ($_GET['currencies'] == 'FCAD') ? 'selected' : '' ?> /> CAD </option>
						<option value="FEUR" <?php echo ($_GET['currencies'] == 'FEUR') ? 'selected' : '' ?> /> EUR </option>
					</select>
				</td>	
			</tr>
			<tr>
				<td>
					To:
				</td>
				<td>
					<?php 
						echo '<input type="text" name="value2" value="'.number_format($result,2,",",".").'" />';
					?>
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="currencies2">
						<option value="TUSD" <?php echo ($_GET['currencies2'] == 'TUSD') ? 'selected' : '' ?> /> USD </option>
						<option value="TCAD" <?php echo ($_GET['currencies2'] == 'TCAD') ? 'selected' : '' ?> /> CAD </option>
						<option value="TEUR" <?php echo ($_GET['currencies2'] == 'TEUR') ? 'selected' : '' ?> /> EUR </option>
					</select>
				</td>	
			</tr>
				<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					<input type="submit" value="convert"/>
				</td>	
			</tr>
		</table>
		
	</form>		
</body>