<?php
	include 'header.php'; // Yhdistetään header.php tiedosto
?>
<!DOCTYPE html> 
<html>
<body>
<form action="add2.php" method="POST"> <!-- kysely joka lähettää tulokset add2.php tiedostoon -->
<input type="text" name="Tiedosto_ID" placeholder="Tiedosto_ID"> <!-- kysytään jokainen kohta erillisellä tekstikentällä -->
<input type="text" name="Pelaajat_Pelaaja_ID" placeholder="Pelaaja_ID">
<input type="text" name="Kartta_Kartta_ID" placeholder="Kartta_ID">
<input type="text" name="Kuvaus_Kuvaus_ID" placeholder="Kuvaus_ID">
<input type="text" name="Nimi" placeholder="Linkki">
<input type="text" name="Ase"  placeholder="ase">
<input type="text" name="Tapot" placeholder="Tapot_ID">
<button type="submit" name="submit-search2">Add</button> <!-- nappula joka lähettää tiedot -->
</form>
	<p>Tiedosto Numero: seuraava vapaana oleva. <br>Pelaaja ID: 12 = Jöööns Mo ja 13 = PulliS <br>Kartta ID: 12 = Cache, 13 = Dust2, 14 = Inferno, 15 = Mirage, 16 = Nuke, 17 = Overpass ja 18 = Train<br>Linkki: URL<br>Ase: Vapaa Teksti<br>Tapot: 11 = 1, 12 = 2, 13 = 3, 14 = 4 ja 15 = 5</p> <!-- Annetaan ohjeet tietojen täyttöä varten -->
<?php // tulostetaan kaikki tietokannassa olevat tiedot
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
	</body>
</html>