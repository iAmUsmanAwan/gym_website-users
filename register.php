<?php

include 'dbconnection/dbconnection.php';


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $class_name = $_POST['class_name'];
    $phone_number = $_POST['phone_number'];
    $height = $_POST['height'];
    $weight= $_POST['weight'];

    $hash_password = password_hash($password, PASSWORD_BCRYPT); // password bcrypt

    $email_query = " select * from users where email='$email' ";
    $query = mysqli_query($con, $email_query);

    $email_count = mysqli_num_rows($query);
    if ($email_count > 0) {
        echo "<script> alert('Email already exists');  </script>";
    } else {
        $insert_query = "insert into users(name,email,password,class_name,phone_number,height,weight,fee_paid,role) 
              values('$name','$email','$hash_password','$class_name','$phone_number',$height,$weight,0,'user')";
        $insert_data = mysqli_query($con, $insert_query);
        if ($insert_data) {

            echo "<script> alert('Successfully register in Fitfuel Gym');  </script>";
          header('location:login.php');

        } else {
            echo "<script> alert('Error');  </script>";
        }


    }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register User</title>

    <link rel="icon" href="./assets/img/fuse.svg" sizes="16x16">
    <link href="css/styles.css" rel="stylesheet" />

    <link href="css/panel.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #ffffff !important;">







    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div>
                                        <img src="./assets/img/fuse.svg" style="display: inline !important;padding-right:10px" alt="logo" width="60" height="60">
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Register User</h3>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-row">

                                         
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="small mb-1">Name</label>
                                                    <input class="form-control py-4" type="text" placeholder="Enter name" name="name" required />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="small mb-1">Email</label>
                                                    <input class="form-control py-4" type="email" name="email" placeholder="Enter email" required autocomplete="false" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="small mb-1">Password</label>
                                                    <input class="form-control py-4" type="password" name="password" placeholder="Enter password" required autocomplete="false" />
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="small mb-1">Phone Number</label>
                                                    <input class="form-control py-4" type="number" name="phone_number" placeholder="Enter phone number" required autocomplete="false" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="small mb-1">Height (Inch)</label>
                                                    <input class="form-control py-4" type="number" name="height" placeholder="Enter Height" required autocomplete="false" />
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="small mb-1">Weight (Kg)</label>
                                                    <input class="form-control py-4" type="number" name="weight" placeholder="Enter Weight" required autocomplete="false" />
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="col-md-4">
                                            <select class="browser-default custom-select" name="class_name" required>
                                        <?php $table = " select * from classes";
                                        $query = mysqli_query($con, $table);
                                        while ($data = mysqli_fetch_array($query)) {

                                        ?>
                                            <option value="<?php echo $data['name'] ?>"><?php echo $data['name'] ?></option>

                                        <?php } ?>
                                    </select>
                                            </div>
                                          

                                        </div>


                                        <div class="form-group mt-4 mb-0 col-lg-2">
                                            <button class="btn btn-primary btn-block" type="submit" name="submit">Sign Up</button></div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2020</div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>