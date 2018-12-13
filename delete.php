<?php
	include 'header.php';// Yhdistetään header.php tiedosto
?>
<!DOCTYPE html> 
<html>
<body>
<form action="delete2.php" method="POST"><!-- kysely joka lähettää tulokset delete2.php tiedostoon -->
<input type="text" name="Tiedosto_ID2" placeholder="Tiedosto_ID"><!-- kysytään Tiedosto_ID tekstikentällä -->
<button type="submit" name="submit-search3">Delete</button>
</form>
	<?php
	$sql ="SELECT * FROM tiedostot"; // haetaan kaikki tietokannassa olevat tiedot
			$result = mysqli_query($conn, $sql);
			$queryResults = mysqli_num_rows($result);
				while ($row = mysqli_fetch_assoc($result)) {
					if ($row['Pelaajat_Pelaaja_ID'] == 13){ // muunnetaan tiedot helpommin ymmärrettävään muotoon
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
				echo "<div><p>".$row['Tiedosto_ID'].", $pelaaja $kartta $gun $murhat, <a href=$url>$url</a></p></div>"; // tulostetaan tiedot sivulle
			}
	?>
</body>
</html>