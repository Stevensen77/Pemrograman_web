

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


              <table id="table_id" class="table table-hover table-bordered table-responsive">
                <col width='1%'>
                <col width='10%'>
                <thead class="thead-dark">
                  <tr>

                    <th scope="col">No_order</th>
                    <th scope="col">Status PO</th>
                    <th scope="col">User</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah Produk</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status Pembayaran</th>
                    <th scope="col"></th>
                    <th scope="col">Tanggal Bayar</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  <?php foreach ($order as $ord): ?>
                  <tr>


                    <td><?= $ord['no_order'] ?></td>
                    <td><?= $ord['status_PO'] ?></td>
                    <td><?= $ord['user'] ?></td>
                    <td><?= $ord['waktu'] ?></td>
                    <td><?= $ord['nama_produk'] ?></td>
                    <td><?= $ord['jumlah_produk'] ?></td>
                    <td><?= $ord['total_harga'] ?></td>
                    <td>
                    <form id="myForm" action="<?= base_url().'menu/ubah_status/'.$ord['id_order']; ?>" method="post" enctype="multipart/form-data">

                      <input type="radio" name="checklist_status" value="Lunas"> Lunas</input><br>

                      <input type="radio" name="checklist_status" value="Belum Lunas"> Belum Lunas</input><br>

                      <input type="radio" name="checklist_status" value="Belum Bayar">Belum Bayar</input><br>
                      <input type="submit" name="kirim" value="Update"/>
                    </form>

                      <?= '<br><br>'.$ord['status_pembayaran'].'<br>'.'<img src="'.base_url().$ord['bukti_bayar'].'" width="100" />'?></td>
                    <form id="myForm" action="<?= base_url().'menu/lunas/'.$ord['id_order']; ?>" method="post" enctype="multipart/form-data">

                    <td width="20">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <input type="file" name="bukti" aria-label="Checkbox for following text input">
                            <input type="hidden" name="status" value="LUNAS">
                          </div>
                        </div>
                        <input type="date" class="form-control" name="tanggal" aria-label="Text input with checkbox">
                        <button type="submit" name="button">Lunas</button>
                      </div>
                    </td>

                    </form>

                    <td><?= $ord['tanggal_bayar'] ?></td>
                    <td>


                    <a class="badge badge-danger" onClick='return confirm("Want to delete this?");'
                    href="<?php echo base_url().'menu/delete_order/'.$ord['id_order']; ?>">
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

      </div>
      <!-- End of Main Content -->


      <div class="modal fade" id="editSubMenu" tabindex="-1" role="dialog" aria-labelledby="editSubMenuLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editSubMenuLabel">Edit Sub Menu</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>



                  <form id="myForm" action="<?= base_url().'menu/edit/'; ?>" method="post">


                      <div class="modal-body">
                        <div class="form-group">

                          <input type="text" class="form-control" id="title" name="title" placeholder="Sub Menu Title">
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="" value="">
                        <select class="form-control" name="menu_id">
                          <option value="">Select Menu</option>
                          <?php foreach ($menu as $m):?>
                            <option value="<?= $m['id']; ?>"><?= $m['menu'] ?></option>
                          <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="url" name="url" placeholder="Submenu Url">
                        </div>
                        <div class="form-group">
                          <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu Icon">
                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_active" id="is_active" value="1"checked>
                            <label class="form-check-label" for="is_active">Active?</label>
                          </div>
                        </div>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                        <button type="submit" class="submit btn btn-primary">Update</button>
                      </div>
                  </form>

                </div>
              </div>
            </div>
