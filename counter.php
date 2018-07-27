<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Code Fellow - Zadania</title>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/v4-shims.css">
	<link rel="Stylesheet" type="text/css" href="styles.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		
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
  
		<div class="Content-wide" style="padding: 200px 0px; width: 100%;">
  
			<div class="button3" style="width: 300px !important; margin:3px; display:inline-block;"><p style="text-align: center; text-decoration: none; font-size: 24px; color: #F89406; padding:none; display: inline-block;">Poziom zadowolenia: </p><p id="counter" style="text-align: center; text-decoration: none; font-size: 24px; color: pink; padding:none; display: inline-block;"></p> </div>
				
		</div>  	
	</div>
	
<div class="Footer"><p style="text-align:center">Copyright by TS</p></div>
	
<!-- counterX -->
<script  type="text/javascript">
	function init() {
		var n = 0;
		e = document.getElementById("counter");
		var looper = setInterval(function() { e.innerHTML = ++n; if (n >= 500) {clearInterval(looper); }}, 1,);
	}
	window.onload = init;
</script>

<!-- scroll -->
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