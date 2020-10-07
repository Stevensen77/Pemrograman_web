
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $title ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'admin/management_user_ecatalog' ?>">Home</a></li>
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

            <?php if(validation_errors()): ?>
                <div class="alert alert-danger" role="alert">
                  <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Edit Profile</h5>
              </div>

        <?php foreach ($user_data as $user): ?>
        <form action="<?php echo base_url().'admin/update_user/'.$user['id'] ?>" method="post" enctype="multipart/form-data">

              <div class="card-body">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Name</label>
                      <p class="text-danger">Before : <?= $user['name'] ?></p>
                      <input type="text" name="nama" placeholder="Enter Your Name" class="form-control">
                    </div>
                  </div>
                </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Email</label>
                        <p class="text-danger">Before : <?= $user['email'] ?></p>
                        <input type="text" name="email" placeholder="Enter Your Email" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Role Id</label>
                        <p class="text-danger">Before : <?= $user['role'] ?></p>
                        <select class="form-control" name="role_id">
                          <option >Select Role_id</option>
                          <?php foreach ($role_id as $role):?>
                            <option value="<?= $role['id'] ?>"><?= $role['role'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Image</label>
                        <p class="text-danger">Before : <?= $user['image'] ?></p>
                        <input type="file" name="gambar" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>New Password</label>
                        <input type="password" name="password1" placeholder="Enter New Password" class="form-control">
                    </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label>Rematch Password</label>
                        <input type="password" name="password2" placeholder="Enter Rematch Password" class="form-control">
                    </div>
                    </div>
                  </div>

        <?php endforeach; ?>

                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" name="button" class="btn btn-outline-primary pull-right">UPDATE DATA</button>
              </div>
        </form>

          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->