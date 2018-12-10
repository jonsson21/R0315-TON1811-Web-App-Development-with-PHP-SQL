<?php
	include 'header.php';
?>
<!DOCTYPE html> 
<html>
<body>
<form action="delete2.php" method="POST">
<input type="text" name="Tiedosto_ID2" placeholder="Tiedosto_ID">
<button type="submit" name="submit-search3">Delete</button>
	<?php
	$sql ="SELECT * FROM tiedostot";
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);
				while ($row = mysqli_fetch_assoc($result)) {
					if ($row['Pelaajat_Pelaaja_ID'] == 13){
					$pelaaja = "PulliS,";
				}
				if ($row['Pelaajat_Pelaaja_ID'] == 12){
					$pelaaja = "Jöööns MO,";
				}
				if ($row['Kartta_Kartta_ID'] == 12){
					$kartta = "Cache,";
				}
				if ($row['Kartta_Kartta_ID'] == 13){
					$kartta = "Dust2,";
				}
				if ($row['Kartta_Kartta_ID'] == 14){
					$kartta = "Inferno,";
				}
				if ($row['Kartta_Kartta_ID'] == 15){
					$kartta = "Mirage,";
				}
				if ($row['Kartta_Kartta_ID'] == 16){
					$kartta = "Nuke,";
				}
				if ($row['Kartta_Kartta_ID'] == 17){
					$kartta = "Overpass,";
				}
				if ($row['Kartta_Kartta_ID'] == 18){
					$kartta = "Train,";
				}
				if ($row['Tapot'] == 11){
					$murhat = "1";
				}
				if ($row['Tapot'] == 12){
					$murhat = "2";
				}
				if ($row['Tapot'] == 13){
					$murhat = "3";
				}
				if ($row['Tapot'] == 14){
					$murhat = "4";
				}
				if ($row['Tapot'] == 15){
					$murhat = "5";
				}
				if ($row['Ase'] == "AK-47"){
					$gun = "AK-47,";
				}
				if ($row['Ase'] == "AWP"){
					$gun = "AWP,";
				}
				if ($row['Ase'] == "Desert Eagle"){
					$gun = "Desert Eagle,";
				}
				if ($row['Ase'] == "M4A1/M4A4"){
					$gun = "M4A1/M4A4,";
				}
				if ($row['Ase'] == "USP"){
					$gun = "USP,";
				}
				
				$url = $row['Nimi'];
				echo "<div><p>".$row['Tiedosto_ID'].", $pelaaja $kartta $gun $murhat, <a href=$url>$url</a></p></div>";
			}
	?>
</form>
</body>
</html>