<footer class="ftco-footer ftco-bg-dark ftco-section" style="height:45%">
      <div class="container" style="margin-top:-8%;margin-bottom:-8%">
        <div class="row mb-5">
      
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2" style="font-size:30px">Shortcut Links</h2>
              <ul class="list-unstyled" style="margin-top:-30px;font-weight:bold">
                <li><a href="index.php" class="py-2 d-block">Home</a></li>
				<li><a href="about.php" class="py-2 d-block">Introduction</a></li>
                <li><a href="product.php" class="py-2 d-block">Products</a></li>
				<li><a href="documentation.php" class="py-2 d-block">Documentation</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
		  
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2" style="font-size:30px">Contact Us</h2>
            	<div class="block-23 mb-3">
	              <ul style="margin-top:-20px">
					<li><span class="text" style="font-weight:bold">Factory</span></li>
	                <li><span class="text">Jalan Lintas Sumatera km 8,<br> Kotabumi, Lampung Utara<br>Post Code 34581<br>Indonesia</span></li>
	              </ul>
	            </div>
            </div>
          </div>
		  

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2" style="color:#0a0a29">.</h2>
            	<div class="block-23 mb-3">
	              <ul>
					<li><span class="text" style="font-weight:bold">Marketing Office</span></li>
	                <li><span class="text">Jalan Griya Agung Blok O No.71,<br> Kompleks Pertokoan Griya Inti Sentosa<br>Jakarta Utara
					<br>Post Code 14350<br>Indonesia</span></li>
					<li><a href="mailto:rubberwood@pt-pmhm.com"><span class="text">rubberwood@pt-pmhm.com</span></a></li>
	                <!--  <li><a href="#"><span class="icon icon-phone"></span><span class="text">08 - </span></a></li> -->
	                
	              </ul>
	            </div>
            </div>
			<div class="col-md">
					<div class="ftco-footer-widget mb-4" style="margin-top:-60px">
					  <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
						
						<h2 style="margin-bottom:0px;margin-left:0px">Share This Website</h2>
						<!-- AddToAny BEGIN -->
						<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
						<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
						<a class="a2a_button_facebook"></a>
						<a class="a2a_button_whatsapp"></a>
						<a class="a2a_button_line"></a>
						<a class="a2a_button_twitter"></a>
						<a class="a2a_button_yahoo_mail"></a>
						<a class="a2a_button_google_gmail"></a>
						</div>
						<script async src="https://static.addtoany.com/menu/page.js"></script>
						<!-- AddToAny END -->
						
					  </ul>
					</div>
			</div>
          </div>
        </div>
        <div class="row" style="margin-top:-30px;">
      <div class="col-md-12 text-center">

	<p style="font-family:verdana">
	Copyright &copy;2019 All rights reserved | 
	
	<?php if(isset($_SESSION['username']) ){?>
	<a href="login/menu_admin/menu_admin.php" >PT.Puncak Menara Hijau Mas</a>
	<?php
	  }
	  else{
	?>
			 
		<a href="#"  onclick="document.getElementById('id01').style.display='block'">PT.Puncak Menara Hijau Mas</a>
			  
	<?php
	  }
	 ?>
	
	</p>
		
	
	<div id="id01" class="modal">
  
		  <form class="modal-content animate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="imgcontainer">
			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
			  <img src="images/admin.jpg" alt="Avatar" class="avatar">
			</div>

			<div class="container">
			  <label for="uname"><b>Username</b></label>
			  <input type="text" placeholder="Enter Username" name="username" required>

			  <label for="psw"><b>Password</b></label>
			  <input type="password" placeholder="Enter Password" name="password" required>
			
			  <input type="hidden" name="form" value="B">
			  <button class="login" type="submit" >Login</button>
			  <label>
				<input type="checkbox" checked="checked" name="remember"> Remember me
			  </label>
			</div>

			<div class="container" style="background-color:#f1f1f1">
			  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
			  <span class="psw">Forgot <a href="#">password?</a></span>
			</div>
		  </form>
	</div>
	
	<script>
	// Get the modal
	var modal = document.getElementById('id01');

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
	</script>
		

		 
	
	
          </div>
        </div>
      </div>
	  <a href="https://colorlib.com" target="_blank" style="float:right;font-size:20px;color:#0a0a29;margin-top:-10%">Colorlib</a>
  
 </footer>