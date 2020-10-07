
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
                <h5 class="m-0"><?= $title ?></h5>
              </div>

              <form action="<?php echo base_url().'menu/updateMenu' ?>" method="post">

                <input type="hidden" name="id" value="<?php echo $id ?>">
              <div class="card-body">

                <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" placeholder="Enter Menu Title" class="form-control">
                  </div>
                  </div>


                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" name="button" class="btn btn-outline-primary pull-right">INSERT DATA</button>
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
