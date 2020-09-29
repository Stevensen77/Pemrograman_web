  <nav class="navbar navbar-expand-lg ftco-navbar-light" id="ftco-navbar" > <!--class:ftco-navbar untuk menu mengikuti scroll kebawah  -->
	    <div class="container" style="background-color:white;opacity:0.8;margin-left:2%;">
			<a class="navbar-brand" style="color:#da1919;font-size:1.8vw">
			<?php
			$db = mysqli_connect("localhost","root","","pmhm"); 
			$sql = "SELECT * FROM produk WHERE kategori ='logo_pmhm'";
			$sth = $db->query($sql);
			$result=mysqli_fetch_array($sth);			
			?>
			<img src="<?php
			echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" width="22%" style="opacity: 0.8;">
	
			PT.PUNCAK MENARA HIJAU MAS</a>
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu" style="color:red;"></span> Menu
			</button>
			
			<div class="collapse navbar-collapse" id="ftco-nav" style="opacity:1;<!-- css lain diatas -->">
				<ul class="navbar-nav ml-auto" style="width:100%;">
				  <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
				  <li class="nav-item"><a href="about.php" class="nav-link">Introduction</a></li>
				  <li class="nav-item"><a href="product.php" class="nav-link">Products</a></li>
				  <li class="nav-item"><a href="documentation.php" class="nav-link">Documentation</a></li>
				  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				</ul>
			</div>
			
	    </div>
	</nav>