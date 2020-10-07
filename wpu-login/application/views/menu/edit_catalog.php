
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <?php if(validation_errors()): ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
    <?php endif; ?>
    
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Update Product</h5>
              </div>


            <?php foreach ($product_specific as $item): ?>
            <form action="<?php echo base_url().'ecatalog/edit_catalog/'.$item['id_produk']; ?>" method="post" enctype="multipart/form-data">

              <input type="hidden" name="id" value="<?php echo $id ?>">
              <div class="card-body">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <h4>Product Name</h4>
                      <p class="text-danger">Before : <?= $item['nama_produk'] ?></p>
                      <input type="text" name="nama" class="form-control" >
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                    <h4>Categoric</h4>
                    <p class="text-danger">Before : <?= $item['kategori'] ?></p>
                    <select class="form-control" name="kategori">
                      <option >Select Categoric</option>
                      <?php foreach ($categoric as $c):?>
                        <option ><?= $c['judul'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <h4>Price</h4>
                      <p class="text-danger">Before : <?= $item['harga'] ?></p>
                      <input type="text" name="harga" class="form-control">
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <h4>Categoric</h4>
                      <p class="text-danger">Before : <?= $item['satuan_beli'] ?></p>
                      <select class="form-control" name="satuan">
                        <option value="">Select Unit of Sale</option>
                        <?php foreach ($unit as $un):?>
                          <option value="<?= $un['satuan_jual'] ?>"><?= $un['satuan_jual'] ?></option>
                        <?php endforeach; ?>
                      </select>
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-2">
                    <div class="form-group">
                      <h4>Stock of Product</h4>
                      <p class="text-danger">Before : <?= $item['stok_produk'] ?></p>
                      <input type="text" name="stok" class="form-control">
                  </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <h4>Image</h4>
                        <input type="file" name="gambar" size="20" placeholder="Image">

                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <h4>Descriptions</h4>
                      <textarea name="deskripsi" class="form-control" cols="50" rows="10" >
                      </textarea>
                    </div>
                  </div>
                </div>

                <?php endforeach; ?>

                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" name="button" class="btn btn-outline-danger col-lg-12">UPDATE DATA</button>
              </div>
              </form>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
