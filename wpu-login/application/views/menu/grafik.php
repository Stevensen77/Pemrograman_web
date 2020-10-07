

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

              <div class="content">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg-12">

                      <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0">Featured</h5>
                        </div>
                        <div class="card-body" style="position: relative; height:70vh; width:70vw">
                            <canvas id="myChart" style="position: relative; height:70vh; width:70vw"></canvas>
                        </div>
                      </div>
                    </div>
                    <!-- /.col-md-6 -->
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>


              <?= $this->session->flashdata('message') ?>

              <?php
                foreach ($grafik as $graf) {
                  $waktu[]=$graf->waktu;
                  $total_order[]=$graf->total_order;

                  // code...
                }

               ?>

              <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js">

              </script>
              <script>
              var ctx = document.getElementById('myChart').getContext('2d');
              var myChart = new Chart(ctx, {
                  type: 'bar',
                  data: {
                      labels: <?php echo json_encode($waktu); ?>,
                      datasets: [{
                          label: 'Jumlah Order',
                          data: <?php echo json_encode($total_order); ?>,
                          backgroundColor: [
                              'rgba(255, 99, 132, 0.2)',
                              'rgba(54, 162, 235, 0.2)',
                              'rgba(255, 206, 86, 0.2)',
                              'rgba(75, 192, 192, 0.2)',
                              'rgba(153, 102, 255, 0.2)',
                              'rgba(255, 159, 64, 0.2)'
                          ],
                          borderColor: [
                              'rgba(255, 99, 132, 1)',
                              'rgba(54, 162, 235, 1)',
                              'rgba(255, 206, 86, 1)',
                              'rgba(75, 192, 192, 1)',
                              'rgba(153, 102, 255, 1)',
                              'rgba(255, 159, 64, 1)'
                          ],
                          borderWidth: 1
                      }]
                  },
                  options: {
                      scales: {
                          yAxes: [{
                              ticks: {
                                  beginAtZero: true
                              }
                          }]

                      }
                  }
              });
              </script>
