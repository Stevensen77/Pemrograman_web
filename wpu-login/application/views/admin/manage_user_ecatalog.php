

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

              <a href="#" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New User</a>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Role</th>
                    <th scope="col">Date Created</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ?>
                  <?php foreach ($user_ecatalog as $user): ?>
                  <tr>
                    <th scope="row"><?= $i;?></th>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td><?php echo '<img width="200px" src="'.base_url('assets/img/profile/').$user['image'] .'"/>'; ?></td>
                    <td><?= $user['role'] ?></td>
                    <td><?= $user['date_created'] ?></td>


                    <td>


                    <a class="badge badge-success"
                    href="<?php echo base_url().'admin/edit_user_ecatalog/'.$user['id']; ?>">
                    <i class="fas fa-edit"></i> Edit</a>


                    <a class="badge badge-danger" onClick='return confirm("Want to delete this?");'
                    href="<?php echo base_url().'admin/delete_user/'.$user['id']; ?>">  <i class="fa fa-trash"></i>Delete</a>
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




<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form class="" action="<?= base_url('admin/add_new_user'); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Name">
            </div>
            <div class="form-group">
              <select class="form-control" name="role_id">
                <option >Select Role_id</option>
                <?php foreach ($role_id as $r):?>
                <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Enter Picture">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="password1" name="password1" placeholder="Enter Password">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="password2" name="password2" placeholder="Enter Rematch Password">
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </form>

    </div>
  </div>
</div>

<!-- ------------------------------------------------------------------------------------------------------------------- -->
