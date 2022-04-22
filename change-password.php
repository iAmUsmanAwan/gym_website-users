<?php  include 'header.php';   ?>
<?php 


include 'dbconnection/dbconnection.php';


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
   
    $email_query = " select * from users where email='$email' ";
    $query = mysqli_query($con, $email_query);
    $email_exists = mysqli_num_rows($query);
    if($email_exists)
    {
       $email_pass = mysqli_fetch_assoc($query);
       $db_pass = $email_pass['password'];
       $pass_decode = password_verify($old_password,$db_pass); 
        
       if($pass_decode)
       {
        $hash_password = password_hash($new_password, PASSWORD_BCRYPT);
          $qyery= "update users
          set password=$hash_password
           where email=$email";
         $update = mysqli_query($con,$query);
           
          header('location:http://localhost/onlinegym/');
       }
       else
       {
        echo "<script> alert('Old password incorrect');  </script>";
       }

    }
    else
    {
     echo "<script> alert('Email not exists');  </script>";
    }
    
}
?>


?>


<div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-xl-4 col-sm-12">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <div>
                                        <img src="./assets/img/fuse.svg" style="display: inline !important;padding-right:10px" alt="logo" width="60" height="60">
                                        <h3 style="display: inline !important;" class="text-center font-weight-light my-4">Change Password</h3>

                                    </div>
                                </div>
                                <div class="card-body">
                                    <form style="margin-top: 20px;" action="" method="post">
                                    <div class="form-group">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control py-4" type="email" name="email"  placeholder="Enter email"  required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Old Password</label>
                                            <input class="form-control py-4" type="password" name="old_password" placeholder="Enter old password"  required/>
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">New Password</label>
                                            <input class="form-control py-4" type="password" name="new_password" placeholder="Enter new password" required/>
                                        </div>
                                        
                                        
                                        <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block" name="submit" type="submit">Submit</button></div>

                                    </form>
                                </div>
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
  
<?php include 'footer.php';?>