<?php include 'header.php';
include 'dbconnection/dbconnection.php';  ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="card mb-4 mt-table">
                <div class="card-header title">
                    <img src="assets/img/fuse.svg" alt="" width="60" height="60">
                    Schedules
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>

                                    <th>Class</th>
                                    <th>Trainer</th>
                                    <th>Timing</th>
                                    <th>Day</th>
                                    <th>description</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                <?php $table = " select * from schedules";
                                $query = mysqli_query($con, $table);
                                while ($data = mysqli_fetch_array($query)) {

                                ?>
                                    <tr>
                                        <td><?php echo $data['id'] ?></td>

                                        <td><?php echo $data['class_name'] ?></td>
                                        <td><?php echo $data['trainer_name'] ?></td>
                                        <td><?php echo $data['timing'] ?></td>
                                        <td><?php echo $data['day_of_week'] ?></td>
                                        <td><?php echo $data['description'] ?></td>
                                        
                                    </tr>
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
</div>

<?php include 'footer.php'; ?>