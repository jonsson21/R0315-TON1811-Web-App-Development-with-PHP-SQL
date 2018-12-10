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
</body>
</html>