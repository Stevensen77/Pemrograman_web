<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?= base_url('uploads/'); ?>oenak.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
							<!--	<div class="home_title" style="color:black">Produk Kami<span>.</span></div>  -->
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">

			<div class="row">
				<div class="col">

					<div class="product_grid">

            <?php

            $db= mysqli_connect("localhost","dody5786_user_dodol","dodoluser","dody5786_dodol"); //keep your db name

            $q = $db->query("SELECT * FROM produk");

            if($q->num_rows > 0){

                while(	$result=mysqli_fetch_array($q)){


            ?>

						<!-- Product -->
						<div class="product">
							<div class="product_image"> <?php echo '<img src="'.base_url('uploads/').$result['link_gambar'].'"/>'; ?> </div>

							<div class="product_content">
								<div class="product_title" style="font-size:20px;color:red"><?php echo $result['nama_produk'] ?></a></div>
								<div class="product_price"><?php echo $result['harga'] ?></div>
                <br>
                <div class="cart_item_quantity">
                  <div class="product_quantity_container">
                    <div class="product_quantity clearfix">
                      <span>Qty :</span>

                      <form class="" action="<?= base_url('user/masukkan_ke_keranjang'); ?>" method="post" enctype="multipart/form-data">
                      <input type="hidden" name="id_produk" value="<?php echo $result['id'] ?>">
                      <input id="quantity_input" name="jumlah" type="number" value="">

                    </div>
                  </div>
                </div>
                <br>
              	<button type="submit" class="btn-primary">
                  Tambahkan Ke Keranjang</button>
							</div>
              </form>
						</div>

            <?php
            }
            }

            ?>



					</div>


				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
	<div class="container">
	  <div class="row icon_box_row">

	    <!-- Icon Box -->
	    <div class="col-lg-4 icon_box_col">
	      <div class="icon_box">
	        <div class="icon_box_image"><img src="<?= base_url('assets/'); ?>images/icon_1.svg" alt=""></div>
	        <div class="icon_box_title">Menjangkau Pesanan</div>
	        <div class="icon_box_text">
	          <p>Dapat menerima pesanan yang terjangkau oleh ekspedisi kami.</p>
	        </div>
	      </div>
	    </div>

	    <!-- Icon Box -->
	    <div class="col-lg-4 icon_box_col">
	      <div class="icon_box">
	        <div class="icon_box_image"><img src="<?= base_url('assets/'); ?>images/icon_2.svg" alt=""></div>
	        <div class="icon_box_title">Pengemasan Aman</div>
	        <div class="icon_box_text">
	          <p>Proses pengemasan yang baik sehingga kesegaran makanan tetap terjaga.</p>
	        </div>
	      </div>
	    </div>

	    <!-- Icon Box -->
	    <div class="col-lg-4 icon_box_col">
	      <div class="icon_box">
	        <div class="icon_box_image"><img src="<?= base_url('assets/'); ?>images/icon_3.svg" alt=""></div>
	        <div class="icon_box_title">Tanggap Respon</div>
	        <div class="icon_box_text">
	          <p>Menerima respon dan tanggapan pelanggan melalui media sosial kami.</p>
	        </div>
	      </div>
	    </div>

	  </div>
	</div>
	</div>
