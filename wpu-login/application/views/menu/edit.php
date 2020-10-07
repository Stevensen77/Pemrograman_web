
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
                <h5 class="m-0">Update Sub Menu</h5>
              </div>

              <form action="<?php echo base_url().'menu/update' ?>" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?php echo $id ?>">
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                    <select class="form-control" name="menu_id">
                      <option value="">Select Menu</option>
                      <?php foreach ($menu as $m):?>
                        <option value="<?= $m['id']; ?>"><?= $m['menu'] ?></option>
                      <?php endforeach; ?>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" placeholder="Enter Sub Menu Title" class="form-control">
                  </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>URL</label>
                      <input type="text" name="url" placeholder="Enter URL" class="form-control">
                  </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>ICON</label>
                      <input type="text" name="icon" placeholder="Enter ICON" class="form-control">
                  </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label>IS_ACTIVE</label>
                      <input type="text" name="is_active" placeholder="Enter IS_ACTTIVE" class="form-control">
                  </div>
                  </div>


                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" name="button" class="btn btn-outline-primary pull-right">UPDATE DATA</button>
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
