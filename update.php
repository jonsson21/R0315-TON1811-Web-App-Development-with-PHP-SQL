<?php
	include 'header.php';
?>
<!DOCTYPE html> 
<html>
<body>
<form action="update2.php" method="POST">
	<p>Päivitettävän arvo</p>
<input type="text" name="Tiedosto_ID5" placeholder="Tiedosto_ID">
	<p>Uudet arvot</p>
<input type="text" name="Tiedosto_ID6" placeholder="Tiedosto_ID">
<input type="text" name="Pelaajat_Pelaaja_ID6" placeholder="Pelaaja_ID">
<input type="text" name="Kartta_Kartta_ID6" placeholder="Kartta_ID">
<input type="text" name="Kuvaus_Kuvaus_ID6" placeholder="Kuvaus_ID">
<input type="text" name="Nimi6" placeholder="Linkki">
<input type="text" name="Ase6"  placeholder="ase">
<input type="text" name="Tapot6" placeholder="Tapot_ID">
<button type="submit" name="submit-search6">Update</button>
</form>
	<p>Tiedosto Numero: seuraava vapaana oleva. <br>Pelaaja ID: 12 = Jöööns Mo ja 13 = PulliS <br>Kartta ID: 12 = Cache, 13 = Dust2, 14 = Inferno, 15 = Mirage, 16 = Nuke, 17 = Overpass ja 18 = Train<br>Linkki: URL<br>Ase: Vapaa Teksti<br>Tapot: 11 = 1, 12 = 2, 13 = 3, 14 = 4 ja 15 = 5</p>
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
</body>
</html>