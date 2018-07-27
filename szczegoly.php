<?php
	session_start();
	
	if (!isset($_SESSION['id'])) {
		header ('Location: tabela.php');
	}
	
	$id = $_SESSION['id'];
	unset ($_SESSION['id']);
	session_unset ();


	require_once 'connect.php';
	$klienciQuery = $db->query("SELECT * FROM klienci where id='$id'");
	$rezultat = $klienciQuery->fetch();

	$imie = $rezultat['imie'];
	$nazwisko = $rezultat['nazwisko'];
	$telefon = $rezultat['telefon'];
	$email = $rezultat['email'];

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Code Fellow - Szczegóły klienta</title>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">
		<link rel="Stylesheet" type="text/css" href="styles.css" />


</head>

<body>
	<div class="Header" id="stickyheader">
		<div class="logo" style="display: inline-block"><a href="index.php"><i id="icon2" class="fas fa-home"></i> </a></div>
	
		<div class="navigation" style="display: inline-block;">
			<a href="http://sklepagro.e.pl/category/czesci-zamienne-do-schladzalnikow-tryby"><i id="icon2" class="fa fa-cog fa-spin"></i> </a>
			<a href="https://ebay.com"><i id="icon2" class="fas fa-shopping-cart"></i> </a>
			<a href="https://facebook.com"><i id="icon2" class="fas fa-users"></i> </a>
			<a href="https://google.com"><i id="icon" class="fas fa-search"></i> </a>
			
		
		</div> 
	</div>
	
	<div class="grid-container-dodaj">
  
		<div class="Content"><h2>Szczegóły klienta</h2>
		
				<table style="margin:auto; border:solid; border-radius:4px; font-size: 18px; line-height: 2.0em; text-align:center;" cellspacing="10" cellpadding="10">
					  <tr>
						<td>Imię:</td>
						<td style="border:solid; border-radius:4px;"><?php
							if (isset($imie))
							{
								echo $imie;
							}
						?></td>
					  </tr>
					  <tr>
						<td>Nazwisko:</td>
						<td style="border:solid; border-radius:4px;"><?php
							if (isset($nazwisko))
							{
								echo $nazwisko;
							}
						?></td>
					  </tr>
						<tr>
							<td>Telefon:</td>
							<td style="border:solid; border-radius:4px;"><?php
								if (isset($telefon))
								{
									echo $telefon;
								}
							?></td>
						 </tr>
						 <tr>
							<td>E-mail:</td>
							<td style="border:solid; border-radius:4px;"><?php
								if (isset($email))
								{
									echo $email;
								}
							?></td>
						</tr>
				</table>
				<br />
		
	
		</div>  	
</div>
	<div class="Footer"><p style="text-align:center">Copyright by TS</p>
	</div>
  
	<!-- SCROLL -->
<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("stickyheader");
		var sticky = header.offsetTop;

		function myFunction() {
		  if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
		  } else {
			header.classList.remove("sticky");
		  }
		}
</script>

</body>
</html>