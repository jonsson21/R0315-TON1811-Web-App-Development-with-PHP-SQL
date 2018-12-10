<?php
	include 'header.php';

if (isset($_POST['submit-search2'])) {
	$Tiedosto_ID = mysqli_real_escape_string($conn, $_POST['Tiedosto_ID']);
	$Pelaajat_Pelaaja_ID = mysqli_real_escape_string($conn, $_POST['Pelaajat_Pelaaja_ID']);
	$Kartta_Kartta_ID = mysqli_real_escape_string($conn, $_POST['Kartta_Kartta_ID']);
	$Kuvaus_Kuvaus_ID = mysqli_real_escape_string($conn, $_POST['Kuvaus_Kuvaus_ID']);
	$Nimi = mysqli_real_escape_string($conn, $_POST['Nimi']);
	$Ase = mysqli_real_escape_string($conn, $_POST['Ase']);
	$Tapot = mysqli_real_escape_string($conn, $_POST['Tapot']);
	
	$sql2 = "INSERT INTO tiedostot (Tiedosto_ID, Pelaajat_Pelaaja_ID, Kartta_Kartta_ID, Kuvaus_Kuvaus_ID, Nimi, Ase, Tapot) VALUES ($Tiedosto_ID, $Pelaajat_Pelaaja_ID, $Kartta_Kartta_ID, $Kuvaus_Kuvaus_ID, '$Nimi', '$Ase', $Tapot)";
	$result2 = mysqli_query($conn, $sql2);
	$queryResult2 = mysqli_num_rows($result2);
}
	header("Location: clipit.php");
?>
<!DOCTYPE html> 
 