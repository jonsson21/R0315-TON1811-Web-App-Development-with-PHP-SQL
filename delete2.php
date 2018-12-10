<?php
	include 'header.php';

if (isset($_POST['submit-search3'])) {
	$Tiedosto_ID2 = mysqli_real_escape_string($conn, $_POST['Tiedosto_ID2']);
	
	$sql3 = "DELETE FROM tiedostot WHERE Tiedosto_ID = $Tiedosto_ID2";
	$result3 = mysqli_query($conn, $sql3);
	$queryResult3 = mysqli_num_rows($result3);
}
	header("Location: clipit.php");
?>
<!DOCTYPE html> 
 