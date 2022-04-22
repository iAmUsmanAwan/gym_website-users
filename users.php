      <?php include 'header.php';
        include 'dbconnection/dbconnection.php';  ?>
      <div id="layoutSidenav_content">
          <main>

              <div class="container-fluid mt-table">

                  <div class="card mb-4">
                      <div class="card-header title">
                          <img src="assets/img/fuse.svg" alt="" width="60" height="60">
                          Users
                      </div>
                      <div class="card-body">
                          <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                      <tr>
                                          <th>ID</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Phone No</th>
                                          <th>Class Name</th>
                                          <th>Height (Inch)</th>
                                          <th>Weight (Kg)</th>
                                          <th>Fee Paid</th>
                                       
                                      </tr>
                                  </thead>

                                  <tbody>
                                      <?php $table = " select * from users";
                                        $query = mysqli_query($con, $table);
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>
                                          <?php if ($data['role'] == 'user') { ?>
                                              <tr>

                                                  <td><?php echo $data['id'] ?></td>
                                                  <td><?php echo $data['name'] ?></td>
                                                  <td><?php echo $data['email'] ?></td>
                                                  <td><?php echo $data['phone_number'] ?></td>
                                                  <td><?php echo $data['class_name'] ?></td>
                                                  <td><?php echo $data['height'] ?></td>
                                                  <td><?php echo $data['weight'] ?></td>

                                                  <td><?php
                                                        if ($data['fee_paid'] == 0)
                                                            echo "No";
                                                        else
                                                            echo "Yes";
                                                        ?></td>

                                            
                                              </tr>
                                          <?php } ?>
                                      <?php } ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </main>
          <footer class="py-4 bg-light mt-auto">
              <div class="container-fluid">
                  <div class="d-flex align-items-center justify-content-between small">
                      <div class="text-muted">Copyright &copy; 2020</div>

                  </div>
              </div>
          </footer>
      </div>

      <?php include 'footer.php'; ?>