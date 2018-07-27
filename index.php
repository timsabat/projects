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

<body onload="incrementCount(10)">
	<div class="Header" id="stickyheader" style="z-index: 1000;">
		<div class="logo" style="display: inline-block"><a href="index.php"><i id="icon2" class="fas fa-home"></i> </a></div>
	
		<div class="navigation" style="display: inline-block;">
			<a href="http://sklepagro.e.pl/category/czesci-zamienne-do-schladzalnikow-tryby"><i id="icon2" class="fa fa-cog fa-spin"></i> </a>
			<a href="https://ebay.com"><i id="icon2" class="fas fa-shopping-cart"></i> </a>
			<a href="https://facebook.com"><i id="icon2" class="fas fa-users"></i> </a>
			<a href="https://google.com"><i id="icon" class="fas fa-search"></i> </a>
			
		
		</div> 
	</div>
		
			<div class="slideshow-container" style="text-align: justify; margin-top:12px;">

			  			  <div class="mySlides fade">
				<div class="numbertext">1 / 5</div>
				<img src="slider_img/img1.jpg" style="width:100%">
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">2 / 5</div>
				<img src="slider_img/img2.jpg" style="width:100%">
			  </div>

			  <div class="mySlides fade">
				<div class="numbertext">3 / 5</div>
				<img src="slider_img/img3.jpg" style="width:100%">
			  </div>
			  
			  <div class="mySlides fade">
				<div class="numbertext">4 / 5</div>
				<img src="slider_img/img4.jpg" style="width:100%">
			  </div>
			  
			  <div class="mySlides fade">
				<div class="numbertext">5 / 5</div>
				<img src="slider_img/img5.jpg" style="width:100%">
			  </div>

			  <!-- przyciski nastepny/poprzedni -->
			  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		

	<div class="grid-container">

  
  <div class="Sidebar"><h2>Menu</h2>
		<ul style="padding: 0px 50px 0px 50px; list-style-type:none; line-height: 2em !important;">
			<a class="button3" style="width: 100px; margin:3px;" href="tabela.php"><li>Tabela CRUD</li></a>
			<a class="button3" style="width: 100px; margin:3px;" href="#popup1">PopUp</a>
				<div id="popup1" class="overlay">
				<div class="popup">
				<h2>Magiczne okienko</h2>
				<a class="close" href="#">&times;</a>
				<div class="content-popup"  id="cbd">
				<input type="button" class="button" onclick="change_value();" value="1">
				<input type="button" class="button2" onclick="change_value2();" value="2">
				<input type="button" class="button3" onclick="change_value3();" value="3">
				<input type="button" class="button4" onclick="change_value4();" value="4">
				</div>
				</div>
				</div>
			<a href="counter.php"><li class="button3" style="width: 100px; margin:3px;">Counter</li></a>
			<a href="petla.php"><li class="button3" style="width: 100px; margin:3px;">Pętla JS</li></a>						
		</ul>
			<div><p style="text-align:center; display:inline-block">Zegar:  </p><div style="display:inline-block" class="container_inner" id="display_div_id"></div></div>
			<br />
			<div style="width:100px; height:100px; border:solid; border-color: #696969; margin:auto;" class="vanish"><i class="fas fa-hand-paper" style="font-size: 100px; color:#FF3B3F; margin:auto;"></i></div>
      
      
 
	</div>
  
  <div class="Content">
  
  			<h2>LOREM [...]</h2>
 
			<p id="magia">	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque mi, varius in faucibus posuere, volutpat a libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis tellus ex, aliquet ac arcu a, mollis laoreet nisl. Integer ac consequat sem. Aenean nunc lectus, suscipit egestas imperdiet non, varius in mauris. Vestibulum molestie vehicula metus, non rhoncus dolor. Ut feugiat finibus ante, eget sodales mauris vehicula tincidunt. Curabitur fermentum quam et neque lobortis porttitor. 
		Donec in massa sagittis diam <b>facilisis molestie. Aliquam a tempus arcu, eget fringilla leo. Donec ut enim ac urna congue ornare ac non eros. Quisque tincidunt egestas placerat. Donec porta erat elit, at egestas mi lacinia et. Suspendisse eget congue odio. Integer ut ligula imperdiet, pellentesque enim sed, egestas orci. 
		Aliquam vitae efficitur velit,</b> in tristique odio. </p><br>
		<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque mi, varius in faucibus posuere, volutpat a libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis tellus ex, aliquet ac arcu a, mollis laoreet nisl. Integer ac consequat sem. Aenean nunc lectus, suscipit egestas imperdiet non, varius in mauris. Vestibulum molestie vehicula metus, non rhoncus dolor. Ut feugiat finibus ante, eget sodales mauris vehicula tincidunt. Curabitur fermentum quam et neque lobortis porttitor. 
		Donec in massa sagittis diam facilisis molestie. Aliquam a tempus arcu, eget fringilla leo. Donec ut enim ac urna congue ornare ac non eros. Quisque tincidunt egestas placerat. Donec porta erat elit, at egestas mi lacinia et. Suspendisse eget congue odio. Integer ut ligula imperdiet, pellentesque enim sed, egestas orci. 
		Aliquam vitae efficitur velit, in tristique odio. </p><br>
		<p>	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer neque mi, varius in faucibus posuere, volutpat a libero. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis tellus ex, aliquet ac arcu a, mollis laoreet nisl. Integer ac consequat sem. Aenean nunc lectus, suscipit egestas imperdiet non, varius in mauris. Vestibulum molestie vehicula metus, non rhoncus dolor. Ut feugiat finibus ante, eget sodales mauris vehicula tincidunt. Curabitur fermentum quam et neque lobortis porttitor. 
		Donec in massa sagittis diam facilisis molestie. Aliquam a tempus arcu, eget fringilla leo. Donec ut enim ac urna congue ornare ac non eros. Quisque tincidunt egestas placerat. Donec porta erat elit, at egestas mi lacinia et. Suspendisse eget congue odio. Integer ut ligula imperdiet, pellentesque enim sed, egestas orci. 
		Aliquam vitae efficitur velit, in tristique odio. </p><br>
	
	
	</div>  	
</div>
	<div class="Footer"><p style="text-align:center">Copyright by TS</p>
	</div>
  
	
	 <!--slider auto i manual -->
	<script type="text/javascript"> 
			
		  var slideIndex = 1;
		  showSlides(slideIndex);

		  function plusSlides(n) {
			showSlides(slideIndex += n);
		  }
		  function currentSlide(n) {
			showSlides(slideIndex = n);
		  }
		  function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
			   slides[i].style.display = "none";
			}
			if (slideIndex> slides.length) {slideIndex = 1}
			slides[slideIndex-1].style.display = "block";
		 }
		 setInterval(plusSlides, 5000, 1); // interwał zmiany obrazka
						
</script>
	
	<!-- magiczny popup -->
	<script type="text/javascript">
		function change_value(){
		var ids = document.getElementById('magia');
		return ids.innerHTML = 'Dzień był letni i świąteczny. Wszystko na świecie jaśniało, kwitło, pachniało, śpiewało. Ciepło i radość lały się z błękitnego nieba i złotego słońca; radość i upojenie tryskały znad pól porosłych zielonym zbożem; radość i złota swoboda śpiewały chórem ptaków i owadów nad równiną w gorącym powietrzu, nad niewielkimi wzgórzami, w okrywających je bukietach iglastych i liściastych drzew.';
		}
	</script>
	<script type="text/javascript">
		function change_value2(){
		var ids = document.getElementById('magia');
		return ids.innerHTML = 'W Tyńcu, w gospodzie „Pod Lutym[2] Turem[3]”, należącej do opactwa, siedziało kilku ludzi, słuchając opowiadania wojaka bywalca, który z dalekich stron przybywszy, prawił im o przygodach, jakich na wojnie i w czasie podróży doznał. Człek był brodaty, w sile wieku, pleczysty, prawie ogromny, ale wychudły; włosy nosił ujęte w pątlik, czyli w siatkę naszywaną paciorkami; na sobie miał skórzany kubrak z pręgami wyciśniętymi przez pancerz, na nim pas, cały z miedzianych klamr; za pasem nóż w rogowej pochwie, przy boku zaś krótki kord[4] podróżny.';
		}
	</script>
	<script type="text/javascript">
		function change_value3(){
		var ids = document.getElementById('magia');
		return ids.innerHTML = 'Mechanika kwantowa (teoria kwantów) – teoria praw ruchu obiektów poszerzająca zakres mechaniki na sytuacje, dla których przewidywania mechaniki klasycznej nie sprawdzały się. Opisuje przede wszystkim świat mikroskopowy – obiekty o bardzo małych masach i rozmiarach, np. atom, cząstki elementarne itp., ale także takie zjawiska makroskopowe jak nadprzewodnictwo i nadciekłość. Jej granicą dla średnich rozmiarów, energii czy pędów zwykle jest mechanika klasyczna.';
		}
	</script>
	<script type="text/javascript">
		function change_value4(){
		var ids = document.getElementById('magia');
		return ids.innerHTML = 'Oddech dla relaksu. W emocjonujących sytuacjach rośnie zapotrzebowanie na tlen i zaczynamy szybciej oddychać (oddychanie to proces czuły na różne bodźce, głównie psychiczne – radość, strach, stres). – Wzrost tempa oddechu sprzyja „pożarowi emocjonalnemu”, tak jak podmuch miecha rozdmuchuje ogień w palenisku – tłumaczy dr Charly Cungi w książce „Jak się relaksować…”. Dlatego rada „oddychaj głęboko”, którą często słyszymy w „gorących” momentach, wcale nie przynosi nam uspokojenia. Paradoksalnie, w chwili stresu należy się zachować przeciwnie do naszej naturalnej reakcji, czyli spowolnić oddech, w myśl zasady „im wolniej oddychamy, tym bardziej się uspokajamy”. „Relaksacja oddechowa sprzyja spowolnieniu rytmu serca i pozwala na szybki relaks w razie konieczności” – zapewnia Cungi.';
		}
	</script>
	<!-- zegar -->
	<script type="text/javascript">

		var counter_list = [00, 00, 00];
		var str_counter_0 = counter_list[0];
		var str_counter_1 = counter_list[1];
		var str_counter_2 = counter_list[2];
		var display_str = "";
		var display_div = document.getElementById("display_div_id");

		function incrementCount(current_count){
		setInterval(function(){
		 // clear count
			while (display_div.hasChildNodes()) {
				  display_div.removeChild(display_div.lastChild);
			  }
			str_counter_0++;
			if (str_counter_0 > 59) {
						str_counter_0 = 0; // reset count
						str_counter_1++;    // increase next count
				  }
			if(str_counter_1>59){
				str_counter_2++;
			  }
			display_str = str_counter_2.toString() + ":" + str_counter_1.toString() + ":" + str_counter_0.toString();
				for (var i = 0; i < display_str.length; i++) {
					var new_span = document.createElement('span');
					new_span.className = 'num_tiles';
					new_span.innerText = display_str[i];
					display_div.appendChild(new_span);
				}
			},1000);
		} 
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