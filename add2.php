<?php
	include 'header.php'; // yhdistetään header.php tiedosto

if (isset($_POST['submit-search2'])) { // kun tiedot on lähetetty tiedostosta add.php suoritetaan alla oleva koodi
	$Tiedosto_ID = mysqli_real_escape_string($conn, $_POST['Tiedosto_ID']); // kaikki tekstikentissä olevat tiedot syötetään muuttujiin
	$Pelaajat_Pelaaja_ID = mysqli_real_escape_string($conn, $_POST['Pelaajat_Pelaaja_ID']);
	$Kartta_Kartta_ID = mysqli_real_escape_string($conn, $_POST['Kartta_Kartta_ID']);
	$Kuvaus_Kuvaus_ID = mysqli_real_escape_string($conn, $_POST['Kuvaus_Kuvaus_ID']);
	$Nimi = mysqli_real_escape_string($conn, $_POST['Nimi']);
	$Ase = mysqli_real_escape_string($conn, $_POST['Ase']);
	$Tapot = mysqli_real_escape_string($conn, $_POST['Tapot']);
	
	$sql2 = "INSERT INTO tiedostot (Tiedosto_ID, Pelaajat_Pelaaja_ID, Kartta_Kartta_ID, Kuvaus_Kuvaus_ID, Nimi, Ase, Tapot) VALUES ($Tiedosto_ID, $Pelaajat_Pelaaja_ID, $Kartta_Kartta_ID, $Kuvaus_Kuvaus_ID, '$Nimi', '$Ase', $Tapot)"; // koodi joka ajetaan sql tietokannassa, tiedostot tietokantaan lisätään annettuihin kohtiin yllä määritetyt muuttujat
	$result2 = mysqli_query($conn, $sql2); 
	$queryResult2 = mysqli_num_rows($result2);
}
	header("Location: clipit.php"); // kun tiedot on lähetetty palataan sivulle clipit.php
?>
<!DOCTYPE html> 
 