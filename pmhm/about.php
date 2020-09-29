	
	<?php
	include 'verifikasi_login.php';
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PT.PMHM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
	<style>
	 @media (min-width: 991.98px) 
	 {
		 .navbar-collapse{
			 background:white;
			 margin-left:100px;
			 margin-right:-165px;
		 }
		 .ftc-no-pt{
			 height:650px;
		 }
		 #image_kotabumi{
			 width:600px;
			 height:450px;
			 margin-top:50px;
		 }
		 #image_kotabumi p{
			 margin-top:450px;
			 margin-left:40px;
		 }
		 #prologue{
			 margin-left:-45px;
			 margin-top:-60px;
		 }
		 #div_milestone{
			height:960px;
		 }
		 #div_milestone img{
			 width:500px;
			 height:450px;
			 margin-left:640px;
			 margin-top:-70px;
		 }
		 #div_milestone p{
			 margin-left:650px;
		 }
		 .isi_milestone{
			 margin-top:-430px;
			 width:100%;
		 }
		 .keterangan_milestone{
            width:45%;
            height:100%;
             float:left;
		 }
		.kiri {
			   margin-left:-50px;
			 
			}
		.kanan {
		    margin-left:50px;
		 
		}
		 #span_1991{
			 margin-left:110px;
		 }
		 #span_1991_now{
			 margin-left:90px;
		 }
		 #span_1994{
			margin-left:100px; 
		 }
		 #span_1994_now{
			 margin-left:12px;
		 }
		 #span_2002_now{
			 margin-left:21px;
		 }
		 #span_2007{
			 margin-left:185px;
		 }
		 #span_2012{
			 margin-left:205px;
		 }
		 #span_2014_now{
			 margin-left:68px;
		 }
		 #span_2014{
			 margin-left:122px;
		 }
		 #span_2014_now_2{
			 margin-left:48px;
		 }
	 }
	 </style>
	 
	<?php
	include 'css/login_popup_css.php';
	?>
	
  </head>
  <body>

	<?php
	include 'navbar.php';
	?>
    <!-- END nav -->

    <div class="hero-wrap" style="background:#e9e4e9;"> <!--div kosong putih belakang menu -->
 
    </div>



    <section class="ftco-section ftc-no-pb ftc-no-pt" id="section_prologue" style="background-color:#e9e4e9;">
			<div class="container">
			<div class="row">
					<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='kotabumi'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);		
					?>
					<div class="col-md-5 img" id="image_kotabumi" 
					style="background-image: url(<?php echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>)">
					<p style=""><i>(Payan Mas monument, icon of Kotabumi City)</i></p>
					<img src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="visibility: hidden;" />
					
					
					</div>
			<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
					<h1 class="mb-4 bread" id="prologue" style="">Prologue</h1>
 
	            </div>
	          </div>
	          <div class="pb-md-5" id="isi_prologue" style="margin-top:-40px;">
							<p align="justify">Located in Kotabumi – North Lampung district of Lampung province, 
							PT. Puncak Menara Hijau Mas (PMHM) has been manufacturing rubberwood products according 
							to applicable standard specified by both domestic and international requirements since 1991.
							Other variety of woods are available upon request. </p>
							
							<p align="justify">Rubberwood product is always in increasing demand and thanks to 
							regional government of North Lampung involvement in providing incentive to rubberwood plantation owner, 
							the plantation area of rubberwood is enlarging each year, hence, ensuring the supply of rubberwood timber.  
							<br><br>
							As timber product is one of favorable commodity in Kotabumi, all stakeholders is aware of forest 
							sustainability and collectively against illegal logging. The regional Forestry and Plantation Service 
							is actively monitoring the origin of timber, logging permit, transport documentation, manufacturing process and
							marketing under Indonesia’s SVLK (Timber Legality Verification System).
							<br><br>
							PMHM has been certified in accordance to SVLK since 2014 by LVLK BRIK-QS with 
							<a href="certification_lvlk.php">certificate no. BRIK-VLK-0207</a>, 
							and upon customer request we can be certified for other applicable certification, namely, FSC, JAS , etc.

							</p>
							
				</div>
			</div>
			</div>
			</div>
	</section>
	
	  
	
	<section class="ftco-section" id="div_milestone" style="background-color:#e9e4e9;">
      <div class="container">
        <div class="row">
				<h1 class="mb-4 bread" id="judul_milestone">Company Milestone</h1>
			
				<img src="images/paramakarya.jpg" alt="" style="">
				<p style=""><i>(Paramakarya Award - As a reward for quality and productivity)</i></p>
				<div class="pb-md-5 isi_milestone" >
						
						  <div class="keterangan_milestone kiri">
						    •	Established rubberwood processing facility in Kotabumi, including saw mill, vacuum & pressure chamber and kiln drier<br><br>
						    •	Supplying treated and kiln dried sawn timber to domestic wood industry<br><br>
						    •	Established rubberwood wood working facility, including, wood cutting, planing, ripping, jointing, laminating, moulding, sanding and lathe turning<br><br>
						    •	Supplying door, frame, furniture component to domestic 	wood industry<br><br>
						    •	Exporting of rubberwood kitchenware and component to Netherland,Germany, Singapore, UK, USA, Philippine, Canada, Australia and Japan<br><br>
						    •	Receiving PARAMAKARYA award from the 6th President of Indonesia for outstanding Productivity and Quality<br><br>
						    •	Established veneer and multiplex plywood manufacturing facility<br><br>
						    •	Supplying multiplex plywood to domestic market	<br><br>
						    •	Established barecore and blockboard manufacturing facility<br><br>
						    •	Exporting of barecore, S4S, finger jointed laminating board/block to domestic and oversea wood industry<br><br>
						    </div>
						    
						    <div class="keterangan_milestone kanan">
						    1991<br><br><br>
						    1991 - until now<br><br><br>
						    1994<br><br><br><br>
						    1994 - until now<br><br><br>
						    2002 - until now<br><br><br><br>
						    2007<br><br><br>
						    2012<br><br>
						    2014 - until now<br><br>
						    2014<br><br>
						    2014 - until now<br><br><br>
						    </div>
						    
						    
						   <!--
						
							•	Established rubberwood processing facility in Kotabumi, <span id="span_1991" style="">		<b>1991</b></span><br>
							<span style="margin-left:8px">including saw mill, vacuum & pressure chamber <br>
							<span style="margin-left:8px">and kiln drier<br>
							•	Supplying treated and kiln dried sawn timber to <span id="span_1991_now" style="">	<b>1991–until now</b><br>
							<span style="margin-left:8px">domestic wood industry<br>
							•	Established rubberwood wood working facility, including,	<span id="span_1994" style="">	<b>1994</b><br>
							<span style="margin-left:8px">wood cutting, planing, ripping, jointing, laminating, moulding,<br> 
							<span style="margin-left:8px">sanding and lathe turning <br>
							•	Supplying door, frame, furniture component to domestic 	<span id="span_1994_now" >	<b>1994 – until now</b><br>
							<span style="margin-left:8px">wood industry<br>
							•	Exporting of rubberwood kitchenware and component 		<span id="span_2002_now" >	<b>2002 – until now</b><br>
							<span style="margin-left:8px">to Netherland,Germany, Singapore, UK, USA, Philippine,<br>
							<span style="margin-left:8px">Canada, Australia and Japan<br>
							•	Receiving PARAMAKARYA award from the 6th					<span id="span_2007" style="">	<b>2007</b>
							<br><span style="margin-left:8px">President of Indonesia for outstanding Productivity <br> 
							<span style="margin-left:8px">and Quality<br>
							•	Established veneer and multiplex plywood <span id="span_2012" style="">	<b>2012</b><br>
							<span style="margin-left:8px">manufacturing facility	<br>
							•	Supplying multiplex plywood to domestic market	<span id="span_2014_now" style="">		<b>2014 – until now</b><br>
							•	Established barecore and blockboard manufacturing	<span id="span_2014" style="">		<b>2014</b><br>
							<span style="margin-left:8px">facility<br>
							•	Exporting of barecore, S4S, finger jointed laminating <span id="span_2014_now_2" style="">	<b>2014 – until now</b><br>
							<span style="margin-left:8px">board/block to domestic and oversea wood industry

							-->
				</div>
        </div>
      </div>
    </section>
  

	<?php
	include 'footer.php';
	?>
   
   
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>