<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(<?= base_url('assets/'); ?>images/cart.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="categories.html">Categories</a></li>
										<li>Shopping Cart</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Cart Info -->

	<div class="cart_info">
		<div class="container">
			<div class="row">
				<div class="col">
					<!-- Column Titles -->
					<div class="cart_info_columns clearfix">
						<div class="cart_info_col cart_info_col_product">Product</div>
						<div class="cart_info_col cart_info_col_price">Price</div>
						<div class="cart_info_col cart_info_col_quantity">Quantity</div>
						<div class="cart_info_col cart_info_col_total">Total</div>
            <div class="cart_info_col cart_info_col_update">update</div>

					</div>
				</div>
			</div>

      <?php foreach ($keranjang as $isi): ?>
			<div class="row cart_items_row">
				<div class="col">

					<!-- Cart Item -->
					<div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
						<!-- Name -->
						<div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
							<div class="cart_item_image">
								<div><img src="<?= base_url('uploads/'). $isi['link_gambar'] ?>" alt=""></div>
							</div>
							<div class="cart_item_name_container">
								<div class="cart_item_name"><a href="#"><?= $isi['nama_produk'] ?></a></div>

							</div>
						</div>
						<!-- Price -->
						<div class="cart_item_price"><?= $isi['harga'] ?></div>
						<!-- Quantity -->
						<div class="cart_item_quantity">
							<div class="product_quantity_container">
								<div class="product_quantity clearfix">
									<span>Qty</span>

                  <form class="" action="<?= base_url('user/delete_keranjang'); ?>" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="id_keranjang" value="<?= $isi['id_keranjang'] ?>">

									<input id="quantity_input" name="jumlah" type="text" value="<?= $isi['jumlah'] ?>">

								</div>
							</div>
						</div>
						<!-- Total -->
						<?php
						
						$total_harga=$isi['harga'] *$isi['jumlah'];
						
						?>
						<div class="cart_item_total" style="margin-right:20px"><?= $total_harga ?></div>
            <button type="submit" class="button_delete" style="color:white;font-weight:bold;background-color:red">Delete</div>
          </form>
					</div>

				</div>
				<br><br>
				<?php endforeach; ?>
			</div>

			<br><br>
			<div class="row row_cart_buttons">
				<div class="col">
					<div class="cart_buttons d-flex flex-lg-row flex-column align-items-start justify-content-start">
						<div class="button continue_shopping_button"><a href="<?= base_url('user/produk'); ?>">Continue shopping</a></div>
						<div class="cart_buttons_right ml-lg-auto">
							<!-- <div class="button clear_cart_button"><a href="#">Clear cart</a></div>  -->


            </div>
					</div>
				</div>
			</div>

		</div>
	</div>
