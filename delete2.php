<?php
	include 'header.php'; // yhdistetään header.php tiedosto

if (isset($_POST['submit-search3'])) { // kun tiedot on vastaanotettu tiedostosta delete.php suoritetaan alla oleva koodi
	$Tiedosto_ID2 = mysqli_real_escape_string($conn, $_POST['Tiedosto_ID2']);// kaikki ole tieto syötetään muuttujaan
	
	$sql3 = "DELETE FROM tiedostot WHERE Tiedosto_ID = $Tiedosto_ID2"; // koodi joka ajetaan tietokannassa, tiedostot -tietokannasta poistetaan rivi jonka Tiedosto_ID on sama kuin muuttujan arvo
	$result3 = mysqli_query($conn, $sql3);
	$queryResult3 = mysqli_num_rows($result3);
}
	header("Location: clipit.php"); // kun tiedot on lähetetty palataan sivulle clipit.php
?>
<!DOCTYPE html> 
 