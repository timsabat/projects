<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Code Fellow - Dodaj</title>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">
		<link rel="Stylesheet" type="text/css" href="styles.css" />


</head>

<body>
	<div class="Header" id="stickyheader">
		<div class="logo" style="display: inline-block"><a href="index.php"><i id="icon2" class="fas fa-home"></i></a></div>
	
		<div class="navigation" style="display: inline-block;">
			<a href="http://sklepagro.e.pl/category/czesci-zamienne-do-schladzalnikow-tryby"><i id="icon2" class="fa fa-cog fa-spin"></i> </a>
			<a href="https://ebay.com"><i id="icon2" class="fas fa-shopping-cart"></i> </a>
			<a href="https://facebook.com"><i id="icon2" class="fas fa-users"></i> </a>
			<a href="https://google.com"><i id="icon" class="fas fa-search"></i> </a>
			
		</div> 
	</div>

	<div class="grid-container-dodaj">
  
		<div class="Content"><h2>Dodaj klienta</h2>
		
			<form method="post" action="handle.php">
		
				<p style="text-align:center; margin-bottom:0px;">Imię: </p><input type="text" name="imie" /><br />
				<p style="text-align:center; margin-bottom:0px;">Nazwisko: </p> <input type="text" name="nazwisko" /><br />
				<p style="text-align:center; margin-bottom:0px;">Telefon: </p> <input type="text" name="telefon" /><br />
				<p style="text-align:center; margin-bottom:0px;">Email: </p> <input type="text" name="email_save" /><br />
				<input type="submit" class="button4" style="margin-top:10px;" value="Dodaj" />
			
			</form>
			<br />
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