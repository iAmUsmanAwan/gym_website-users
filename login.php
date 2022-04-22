<?php

session_start();

include 'dbconnection/dbconnection.php';


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

   
    $email_query = " select * from users where email='$email' ";
    $query = mysqli_query($con, $email_query);
    $email_exists = mysqli_num_rows($query);
    if($email_exists)
    {
       $email_pass = mysqli_fetch_assoc($query);
       $db_pass = $email_pass['password'];
       $pass_decode = password_verify($password,$db_pass); 
        
       if($pass_decode)
       {
         $_SESSION['user_name'] = $email_pass['name']; 
         if($email=='fitfuelgym@gmail.com')    
             header('location:index.php');
       }
       else
       {
        echo "<script> alert('Incorrect password');  </script>";
       }

    }
    else
    {
        
        echo "<script> alert('Email not exists');  </script>";
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
    <meta name="author" content="Rao Hamza" />
    <title>Fitness Fuel Gym Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    
    <link rel="icon" href="./assets/img/fuse.svg"  sizes="16x16">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
</head>

<body style="background-color: #ffffff !important;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-xl-4 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div>
                                        <img src="./assets/img/fuse.svg"
                                            style="display: inline !important;padding-right:10px" alt="logo" width="60"
                                            height="60">
                                        <h3 style="display: inline !important;"
                                            class="text-center font-weight-light my-4">Login</h3>

                                    </div>
                                </div>
                                <div class="card-body" style="height: 400px;">
                                    <form style="margin-top: 20px;" action="" method="post">
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputEmailAddress">Email</label>
                                            <input class="form-control py-4" id="inputEmailAddress" type="email" name="email"
                                                placeholder="Enter email address" required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="inputPassword">Password</label>
                                            <input class="form-control py-4" id="inputPassword" type="password" name="password"
                                                placeholder="Enter password" required />
                                        </div>
                                        <div class="form-group">
                                            <div
                                                class="custom-control custom-checkbox d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input class="custom-control-input" id="rememberPasswordCheck"
                                                    type="checkbox" />
                                                <label class="custom-control-label"
                                                    for="rememberPasswordCheck">Remember</label>
                                                <a class="small" href="password.html">Forgot Password?</a>
                                            </div>
                                        </div>

                                        <div class="form-group mt-4 mb-0">
                                            <button class="btn btn-primary btn-block"
                                             type="submit" name="submit">Login</button></div>

                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
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
                        <!--                            <div>-->
                        <!--                                <a href="#">Privacy Policy</a>-->
                        <!--                                &middot;-->
                        <!--                                <a href="#">Terms &amp; Conditions</a>-->
                        <!--                            </div>-->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>