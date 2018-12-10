<?php
	include 'header.php';
?>
<!DOCTYPE html> 
<html>
<body>
<form action="add2.php" method="POST">
<input type="text" name="Tiedosto_ID" placeholder="Tiedosto_ID">
<input type="text" name="Pelaajat_Pelaaja_ID" placeholder="Pelaaja_ID">
<input type="text" name="Kartta_Kartta_ID" placeholder="Kartta_ID">
<input type="text" name="Kuvaus_Kuvaus_ID" placeholder="Kuvaus_ID">
<input type="text" name="Nimi" placeholder="Linkki">
<input type="text" name="Ase"  placeholder="ase">
<input type="text" name="Tapot" placeholder="Tapot_ID">
<button type="submit" name="submit-search2">Add</button>
</form>
	<p>Tiedosto Numero: seuraava vapaana oleva. <br>Pelaaja ID: 12 = Jöööns Mo ja 13 = PulliS <br>Kartta ID: 12 = Cache, 13 = Dust2, 14 = Inferno, 15 = Mirage, 16 = Nuke, 17 = Overpass ja 18 = Train<br>Linkki: URL<br>Ase: Vapaa Teksti<br>Tapot: 11 = 1, 12 = 2, 13 = 3, 14 = 4 ja 15 = 5</p>
</body>
</html>