<?php
	include 'header.php';
?>
<!DOCTYPE html> 
<html lang="en"> 
 <head> 
	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clip Gallery</title> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
 <!--[if lt IE 9]>  <script src=" https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js "></script> 
<script src=" https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script> 
<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<style>
span{
	margin-right: 5px;
	color: black;
}
table{
	margin-bottom: 2%;
	text-shadow: 8px 6px #f4d402;
}
form.a{
	margin-top: 2%;
	border: 2px solid black;
	padding: 2%;
	box-shadow: 10px 10px #f4d402;
	margin-right: 3%;
}
footer{
	text-align: center;
	margin-top: -3%;
	overflow: hidden;
	background: none;
}
p.foot{
	font-size: 13px;
	margin-bottom: 1%;
	color: grey;
}
font{
	padding-left: 5px;
	color: black;
}
img.pelit{
	margin-right: 30px;
	margin-bottom: 20px;
}
img.csw{
	border-radius: 7%;
	margin-bottom: 5px;
	width: 100%;
	height: 100%;
	max-width: 220px;
	max-height: 220px;
}
img.kartat{
	border-radius: 7%;
	margin-bottom: -2%;
	width: 100%;
	height: 100%;
	max-width: 300px;
	max-height: 300px;
	margin-left: 100px;
	margin-top: 7%;
}
a {
	color: black;
}
.nav-item:hover {
    background-color: #f4d402;
	transition: 0.5s;
	border-radius: 15px;
}
.navbar-brand{
	font-size: 0px;
}
a.avatar{
	width: 100%;
	height: 100%;
}
img.avatar{
	width: 100%;
	height: 100%;
	max-width: 300px;
	max-height: 300px;
}
.fixed {
	max-width: 100%;
	height: auto;
	width: auto;
}
iframe{
	margin-top: 20px;
}
.aapo{
	background-color: #f4d402;
}
.games{
	width: 100%;
	max-width: 646px;
}
img.mapit{
	border-radius: 7%;
	margin-bottom: 5px;
	width: 100%;
	height: 100%;
	max-width: 150px;
	max-height: 150px;
}
p.kuvateksti{
	font-size: 20px;
	margin-top: 15px;
	font-weight: bold;
}
body {
	background: url("kuvat/background.jpg");
	background-attachment: fixed;
	background-size: 100%;
	background-position: center top;
	display: block; 
	padding-top: 4.918%;
	font-size: 18px;
}
.fixed-ratio-resize {
	max-width: 25%;
	height: auto;
	width: auto;
	margin-bottom: 15px;
}
h1 {
	font-size: 36px;
}
h2 {
	padding-bottom: 25px;
	font-size: 30px;
	font-weight: 400;
}
ul {
	list-style-type: none;
}
section{
	margin-top: 2%;
	margin-left: 12%;
	margin-right: 12%;
	margin-bottom: 5%;
	padding-left: 3%;
	padding-right: 3%;
	padding-bottom: 4%;
	padding-top: 25px;
	background: #f7faff;
	border-radius: 25px;
}
header{
	background: none;
}
.videoWrapper {
	position: relative;
	padding-bottom: 56.25%; /* 16:9 */
	padding-top: 25px;
	height: 0;
	margin-bottom: 8%;
}
.videoWrapper iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}
.navbar{
	margin: auto;
	width: auto;
	max-width: 950px;
}
.nav-item{
	padding-left: 7px;
	padding-right: 7px;
}
a{
	font-weight: bold;
}
@media screen and (max-width: 768px) {
	section{
		margin-left: 3%;
		margin-right: 3%;
	}
	a{
		font-size: 18px;
	}
	.videoWrapper iframe{
		height: 150%;
	}
	.videoWrapper{
		margin-bottom: 45%;
	}
	.navbar{
		width: 165px;
		margin-left: 3%;
		padding-left: 10px;
		border-radius: 25px;
	}
	font{
		padding-left: 10%;
	}
	figcaption{
		font-size: 0;
	}
	section{
		font-size: 15px;
	}
	.navbar-brand{
		font-size: 22px;
	}
	}
	input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
	}
	input[type=text]:focus {
    width: 50%;
	}
	th{
		padding-left: 75px;
		padding-right: 170px;
	}
	div.oma{
	margin-left: -110px;
	margin-bottom: -42px;
	margin-top: -50px;
}
div.oma2{
	margin-left: 110px;
	margin-top: -42px;
}
</style>
</head> 
<body> 
<header>
<div class="container">
	<h1><center><div class="oma" style="color:#76CDC8;">Clip</div><div class="oma2" style="color:#FCB00C;">Gallery</div></center></h1> 
	<a href="index.html"><center><img class="fixed-ratio-resize" src="kuvat/banner.jpg" alt="banner"></center></a>
</div>
</header>
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <a class="navbar-brand">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color:black;" href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:black;" href="clipit.php"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>Clips</a>
      </li>
    </ul>
  </div>  
</nav>
<section>
<h2>Clipit</h2>
	<br>
	<p class="kuvateksti">Nick, Map, Ase, Tapot, Linkki</p>
	<?php	
	//Tässä ha
	if (isset($_POST['submit-search'])) {
		$radioVal = $_POST['nick'];
		if ($radioVal == 'nick1'){
			$nick = "12";
		}
		if ($radioVal == 'nick2'){
			$nick = "13";
		}
		if ($radioVal == 'nick0'){
			$nick = "1";
		}
		$radioVal2 = $_POST['map'];
		if ($radioVal2 == 'map1'){
			$map = "12";
		}
		if ($radioVal2 == 'map2'){
			$map = "13";
		}
		if ($radioVal2 == 'map3'){
			$map = "14";
		}
		if ($radioVal2 == 'map4'){
			$map = "15";
		}
		if ($radioVal2 == 'map5'){
			$map = "16";
		}
		if ($radioVal2 == 'map6'){
			$map = "17";
		}
		if ($radioVal2 == 'map7'){
			$map = "18";
		}
		if ($radioVal2 == 'map0'){
			$map = "1";
		}
		$radioVal3 = $_POST['tapot'];
		if ($radioVal3 == 'tapot1'){
			$tapot = "11";
		}
		if ($radioVal3 == 'tapot2'){
			$tapot = "12";
		}
		if ($radioVal3 == 'tapot3'){
			$tapot = "13";
		}
		if ($radioVal3 == 'tapot4'){
			$tapot = "14";
		}
		if ($radioVal3 == 'tapot5'){
			$tapot = "15";
		}
		if ($radioVal3 == 'tapot0'){
			$tapot = "1";
		}
		$radioVal4 = $_POST['ase'];
		if ($radioVal4 == 'ase1'){
			$ase = "AK-47";
		}
		if ($radioVal4 == 'ase2'){
			$ase = "AWP";
		}
		if ($radioVal4 == 'ase3'){
			$ase = "Desert Eagle";
		}
		if ($radioVal4 == 'ase4'){
			$ase = "M4A1/M4A4";
		}
		if ($radioVal4 == 'ase5'){
			$ase = "USP";
		}
		if ($radioVal4 == 'ase0'){
			$ase = "";
		}
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM tiedostot WHERE Pelaajat_Pelaaja_ID LIKE '%$nick%' AND Kartta_Kartta_ID LIKE '%$map%' AND Tapot LIKE '%$tapot%' AND Ase LIKE '%$ase%' AND (Nimi LIKE '%$search%' OR Tapot LIKE '%$search%' OR Ase LIKE '%$search%')";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		$delete = "DELETE FROM tiedostot WHERE Pelaajat_Pelaaja_ID LIKE '%$nick%' AND Kartta_Kartta_ID LIKE '%$map%' AND Tapot LIKE '%$tapot%' AND Ase LIKE '%$ase%' AND (Nimi LIKE '%$search%' OR Tapot LIKE '%$search%' OR Ase LIKE '%$search%')";
		
		echo "Tuloksia on ".$queryResult.". <br>";
		
		if ($queryResult > 0) {
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
				echo "<div><p>$pelaaja $kartta $gun $murhat, <a href=$url>$url</a></p></div> ";
			}
		} else{
			echo "Ei tuloksia!";
		}
	}
?>
	</section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
<footer>
	<p class="foot">Daaniel ja Jöööns</p>
</footer>
</body>
</html> 