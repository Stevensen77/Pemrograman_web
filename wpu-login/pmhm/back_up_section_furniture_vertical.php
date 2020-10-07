
			<div class="col-md-7 heading-section text-center ftco-animate enam" style="margin-left:280px">
            <h2 class="mb-4" style="margin-top:50px;">Finish Product / Furniture</h2>
			</div>
			
		<section class="ftco-section ftc-no-pb ftc-no-pt enam" style="background-color:#e9e4e9;height:350px;margin-top:-20px;margin-bottom:30px">
			<div class="container">
			<div class="row">
				
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='talenan_1'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="width:350px;height:320px;margin-left:50px;margin-top:30px">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 " style="margin-left:50px">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="margin-top:-78px;margin-left:-45px">Chopping Board</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="margin-top:-60px">PT. Puncak Menara Hijau Mas has been serving wood industries both in Indonesia and overseas since 1997. 
							We prioritize to meet our customers need and specification. 
							We process rubberwood, mainly, and small amount of mixed wood from traceable and legal resources in Lampung province 
							in accordance to applicable forest management certification (SVLK).
							Our sawn timber division turns sawn timber into S4S, profile, dowel, finger jointed laminating board/block and component.
							We also have veneering division which manufactures veneer and multiplex plywood for construction and furniture sectors.
							<a href="" >(Read more)</a>
							</p>
							

				</div>
			</div>
			</div>
			</div>
			</section>
<!-- ================================================================================================================================================ -->				

	<section class="ftco-section ftc-no-pb ftc-no-pt enam" style="background-color:#e9e4e9;height:350px;margin-top:-20px;margin-bottom:30px">
			<div class="container">
			<div class="row">
				
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='talenan_2'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="width:450px;height:320px;margin-top:30px">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 " style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="margin-top:-78px;margin-left:-45px">Cutting Board</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="margin-top:-60px">PT. Puncak Menara Hijau Mas has been serving wood industries both in Indonesia and overseas since 1997. 
							We prioritize to meet our customers need and specification. 
							We process rubberwood, mainly, and small amount of mixed wood from traceable and legal resources in Lampung province 
							in accordance to applicable forest management certification (SVLK).
							Our sawn timber division turns sawn timber into S4S, profile, dowel, finger jointed laminating board/block and component.
							We also have veneering division which manufactures veneer and multiplex plywood for construction and furniture sectors.
							<a href="" >(Read more)</a>
							</p>
							

				</div>
			</div>
			</div>
			</div>
			</section>
<!-- ================================================================================================================================================ -->				

	<section class="ftco-section ftc-no-pb ftc-no-pt enam" style="background-color:#e9e4e9;height:350px;margin-top:-20px;margin-bottom:30px">
			<div class="container">
			<div class="row">
				
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='knife_block'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="width:250px;height:320px;margin-left:100px;margin-top:30px">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 " style="margin-left:100px">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="margin-top:-78px;margin-left:-45px">Knife Block</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="margin-top:-60px">PT. Puncak Menara Hijau Mas has been serving wood industries both in Indonesia and overseas since 1997. 
							We prioritize to meet our customers need and specification. 
							We process rubberwood, mainly, and small amount of mixed wood from traceable and legal resources in Lampung province 
							in accordance to applicable forest management certification (SVLK).
							Our sawn timber division turns sawn timber into S4S, profile, dowel, finger jointed laminating board/block and component.
							We also have veneering division which manufactures veneer and multiplex plywood for construction and furniture sectors.
							<a href="" >(Read more)</a>
							</p>
							

				</div>
			</div>
			</div>
			</div>
			</section>
<!-- ================================================================================================================================================ -->		

			<section class="ftco-section ftc-no-pb ftc-no-pt tiga" style="background-color:#e9e4e9;height:350px;margin-top:-20px">
			<div class="container">
			<div class="row">
				
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='door'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="width:450px;height:320px;margin-top:30px">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5" style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="margin-top:-78px;margin-left:-45px">Door</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="margin-top:-60px">PT. Puncak Menara Hijau Mas has been serving wood industries both in Indonesia and overseas since 1997. 
							We prioritize to meet our customers need and specification. 
							We process rubberwood, mainly, and small amount of mixed wood from traceable and legal resources in Lampung province 
							in accordance to applicable forest management certification (SVLK).
							Our sawn timber division turns sawn timber into S4S, profile, dowel, finger jointed laminating board/block and component.
							We also have veneering division which manufactures veneer and multiplex plywood for construction and furniture sectors.
							<a href="" >(Read more)</a>
							</p>
							
							
							
							
							<!-- <a href="about.php" class="pixel-btn">More<span class="icon-long-arrow-right">  </span></a> -->
			
				</div>
			</div>
			</div>
			</div>
			</section>

<!-- ================================================================================================================================================ -->				

	<section class="ftco-section ftc-no-pb ftc-no-pt enam" style="background-color:#e9e4e9;height:350px;margin-top:-20px;margin-bottom:30px">
			<div class="container">
			<div class="row">
				
			<a href="#">
			<?php
					$db = mysqli_connect("localhost","root","","pmhm"); //keep your db name
					$sql = "SELECT * FROM produk WHERE kategori ='dining_table'";
					$sth = $db->query($sql);
					$result=mysqli_fetch_array($sth);
					// '<img src="data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).'" 
				?>
				<img src="<?php
				echo 'data:image/jpeg;base64,'.base64_encode( $result['gambar'] ).''?>" style="width:450px;height:320px;margin-top:30px">	
			</a>
				
			<div class="col-md-7 py-5 wrap-about pb-md-5 " style="">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	
		            <h2 class="mb-4" style="margin-top:-78px;margin-left:-45px">Dining Table</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p style="margin-top:-60px">PT. Puncak Menara Hijau Mas has been serving wood industries both in Indonesia and overseas since 1997. 
							We prioritize to meet our customers need and specification. 
							We process rubberwood, mainly, and small amount of mixed wood from traceable and legal resources in Lampung province 
							in accordance to applicable forest management certification (SVLK).
							Our sawn timber division turns sawn timber into S4S, profile, dowel, finger jointed laminating board/block and component.
							We also have veneering division which manufactures veneer and multiplex plywood for construction and furniture sectors.
							<a href="" >(Read more)</a>
							</p>
							

				</div>
			</div>
			</div>
			</div>
	</section>