<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi POS PRTI</title>
<link href="view/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="view/js/dropdown.js"></script>
<script type="text/javascript" src="view/js/highslide-with-html.js"></script>
<script type="text/javascript" src="view/js/slideshow.js"></script>
<script type="text/javascript" src="view/js/utilities.js"></script>

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>

</head>
<body>


	<div class="slideshow-container">

	<div class="mySlides fade">
	  <div class="numbertext">1 / 3</div>
	  <img src="view/images/aplikasi_kasir.jpg" style="width:100%">
	  <div class="text">Aplikasi Kasir</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">2 / 3</div>
	  <img src="view/images/login.png" style="width:100%">
	  <div class="text">POS Point of Sales</div>
	</div>

	<div class="mySlides fade">
	  <div class="numbertext">3 / 3</div>
	  <img src="view/images/sistem_kasir.jpg" style="width:100%">
	  <div class="text">Kelompok 4</div>
	</div>

	</div>
	<br>





<div id="container_wrapper">
	<div class="spacer"></div>
<div id="container">



		<div id="left_column">
			<div class="text_area" align="justify">
			<?php include "login.php"; ?>
			</div>
		</div>
		<div style='clear:both;'></div>
		<div style='color:#fff;' id="footer">
		<center>Copyright (c) 2019 - Aplikasi POS - Created by: <a href="#" target="_blank">Kelompok 4 PRTI</a></center>
    </div>

</div>
<div class="spacer"></div>
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>