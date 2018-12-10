<?php
	include 'header.php';

if (isset($_POST['submit-search6'])) {
	$Tiedosto_ID5 = mysqli_real_escape_string($conn, $_POST['Tiedosto_ID5']);
	
	$Tiedosto_ID6 = mysqli_real_escape_string($conn, $_POST['Tiedosto_ID6']);
	$Pelaajat_Pelaaja_ID6 = mysqli_real_escape_string($conn, $_POST['Pelaajat_Pelaaja_ID6']);
	$Kartta_Kartta_ID6 = mysqli_real_escape_string($conn, $_POST['Kartta_Kartta_ID6']);
	$Kuvaus_Kuvaus_ID6 = mysqli_real_escape_string($conn, $_POST['Kuvaus_Kuvaus_ID6']);
	$Nimi6 = mysqli_real_escape_string($conn, $_POST['Nimi6']);
	$Ase6 = mysqli_real_escape_string($conn, $_POST['Ase6']);
	$Tapot6 = mysqli_real_escape_string($conn, $_POST['Tapot6']);
	
	$sql6 = "UPDATE tiedostot SET Tiedosto_ID = $Tiedosto_ID6, Pelaajat = $Pelaajat_Pelaaja_ID6, Kartta_Kartta_ID = $Kartta_Kartta_ID6, Kuvaus_Kuvaus_ID = $Kuvaus_Kuvaus_ID6, Nimi = '$Nimi6', Ase = '$Ase6', Tapot = $Tapot6 WHERE Tiedosto_ID = $Tiedosto_ID5";
	$result6 = mysqli_query($conn, $sql6);
	$queryResult6 = mysqli_num_rows($result6);
}
	header("Location: clipit.php");
?>
<!DOCTYPE html> 
 