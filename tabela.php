<?php

require_once 'connect.php';
$usersQuery = $db->query('SELECT * FROM klienci');
$users = $usersQuery->fetchAll();

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Code Fellow - Tabela admina</title>
	
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
	
	<div class="grid-container-tabela">

  		<div class="Content-wide"><h2>Tabela admina</h2>
		
			<a href="dodaj.php"><button class="button" style="text-align:center; margin-bottom:10px;">Dodaj nowy rekord</button></a>
		 
			<table cellpadding="4px" border="1" style="font-size: 15px; margin:auto; padding: 5px;">
					<thead>
						<tr style="padding:5px;"><th colspan="7">Łącznie rekordów: <?= $usersQuery->rowCount() ?></th></tr>
						<tr><th>Imię</th><th>Nazwisko</th><th>Telefon</th><th>E-mail</th><th><i class="far fa-id-card"></i>
						</th><th><i class="far fa-edit"></i></th><th><i class="far fa-trash-alt"></i></th></tr>
					</thead>
					<tbody>
						<?php
							foreach ($users as $user) {
								echo "<tr><td>{$user['imie']}</td><td>{$user['nazwisko']}</td><td>{$user['telefon']}</td><td>{$user['email']}</td>".'<td><form action="handle.php" method="post"><input type="hidden" name="idS" value="'.$user['id'].'"><input type="submit" value="Szczegóły" name="button" class="button4" method="post"></form></td><td><form action="handle.php" method="post"><input type="hidden" name="idE" value="'.$user['id'].'"><input type="submit" value="Edytuj" name="button" class="button2" method="post"></form></td><td><form action="handle.php" method="post"><input type="hidden" name="idU" value="'.$user['id'].'"><input type="submit" value="Usuń" name="button" class="button3" method="post"></form></td></tr>';
								$id; 
							}
						?>
					</tbody>
				</table>
				<br />
				<br />
		</div>  	
	</div>
	
<div class="Footer"><p style="text-align:center">Copyright by TS</p></div>
  

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