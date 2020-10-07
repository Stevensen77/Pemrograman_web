

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>


          <div class="row">
            <div class="col-lg">

              <?php if(validation_errors()): ?>
                	<div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                  </div>
              <?php endif; ?>




              <?= $this->session->flashdata('message') ?>

              <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newProductModal">Add New Product</a>
              <table id="table_id" class="table table-bordered table-hover display">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Id Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Satuan Beli</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Stok Produk</th>

                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  <?php foreach ($product as $item): ?>
                  <tr>
                    <td scope="row"><?= $i;?></td>
                    <td><?= $item['id_produk'] ?></td>
                    <td><?= $item['nama_produk'] ?></td>
                    <td><?= $item['kategori'] ?></td>
                    <td><?= $item['harga'] ?></td>
                    <td><?= $item['satuan_beli'] ?></td>
                    <td><?php echo '<img width="200px" src="'.base_url().$item['link_gambar'].'"/>'; ?></td>

                    <td><?= $item['stok_produk'] ?></td>
                    <td><?= $item['deskripsi'] ?></td>

                    <td>

                    <a class="badge badge-success" href="<?php echo base_url().'ecatalog/edit_catalog/'.$item['id_produk']; ?>">
                    <i class="fas fa-edit"></i> Edit</a>

                    <a class="badge badge-danger" onClick='return confirm("Want to delete this?");'
                    href="<?php echo base_url().'ecatalog/delete_catalog/'.$item['id_produk']; ?>">
                     <i class="fa fa-trash"></i>Delete</a>

                    </td>
                  </tr>
                <?php $i++; ?>
                <?php endforeach; ?>

                </tbody>
              </table>
            </div>

          </div>


        </div>
        <!-- /.container-fluid -->


      <!-- End of Main Content -->


      <div class="modal fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newProductLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="newProductLabel">Insert New Product</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>



                  <form id="myForm" action="<?= base_url().'ecatalog/insert/'; ?>" method="post" enctype="multipart/form-data">


                      <div class="modal-body">
                        <div class="form-group">
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Product Name">
                        </div>
                        <div class="form-group">

                        <select class="form-control" name="kategori">
                          <option value="">Select Categoric</option>
                          <?php foreach ($categoric as $c):?>
                            <option value="<?= $c['judul'] ?>"><?= $c['judul'] ?></option>
                          <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="harga" name="harga" placeholder="Price">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="satuan" name="satuan" placeholder="Units">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="stok" name="stok" placeholder="Stock of Product">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Descriptions">
                        </div>
                        <div class="form-group">
                          <input type="file" name="userfile" size="20" placeholder="Image"/>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <button type="submit" class="submit btn btn-primary">Insert</button>
                      </div>
                  </form>

                </div>
              </div>
</div>
