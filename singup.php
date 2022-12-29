<?php
  $error = false;
  $userexit;
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    require 'part/dbconnect.php';

    $sfname = $_POST['sfName'];
    $slname = $_POST['slName'];
    $username = $_POST['susername'];
    $semail = $_POST['smail'];
    $scpass = $_POST['scpass'];
    $spass = $_POST['spass'];
  
    $sql = "SELECT * FROM `singup` WHERE username = '$username'";

    $result = mysqli_query($connection, $sql);

    $exitsvalue = mysqli_num_rows($result);
    if($exitsvalue > 0){
      if($error = true){
        $userexit = 'This name users already exits';
      }else{
        echo'';
      }

    }else{
      
      $singUP = "INSERT INTO `singup` (`firstname`, `lastname`, `username`, `email`, `confirmpassword`, `password`) VALUES ('$sfname', '$slname', '$username', '$semail', '$scpass', '$spass')";
  
      mysqli_query($connection, $singUP);
    }
  }




?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact Page</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php require_once 'part/_navbar.php';?>
      <section class=" login_section contact_us py-5" style="background-image: url(img/olivier-guillard-xnGu_KGrqX8-unsplash.jpg);">
        <div class="sing_area">
          <div class="contact_area">
            <h2 class="text-center">Sing Up</h2>
            <form action="singup.php" id="login_form" method="POST" name="login_form" class="sub_form">
              <div class="row">
                <div class="col-sm-6 col-12">
                  <div class="form-group">
                    <label for="sfName" class="form-label">First Name</label>
                    <input type="text" id="sfName" name="sfName" class="form-control">
                    <span class="logErr"></span>
                  </div>
                </div>
                <div class="col-sm-6 col-12">
                  <div class="form-group">
                    <label for="slName" class="form-label">Last Name</label>
                    <input type="text" id="slName" name="slName" class="form-control">
                    <span class="logErr"></span>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <div class="row">
                  <div class="col-sm-6 col-12">
                    <label for="smail" class="form-label">Email</label>
                    <input type="email" id="smail" name="smail" class="form-control">
                    <span class="logErr"></span>
                  </div>
                  <div class="col-sm-6 col-12">
                    <label for="susername" class="form-label">Username</label>
                    <input type="text" id="susername" name="susername" class="form-control">
                    <span class="logErr"><?php echo $userexit; ?></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 col-12">
                  <div class="form-group">
                    <label for="scpass" class="form-label">Confirm Password</label>
                    <input type="password" id="scpass" name="scpass" class="form-control">
                    <span class="logErr"></span>
                  </div>
                </div>
                <div class="col-sm-6 col-12">
                  <div class="form-group">
                    <label for="spass" class="form-label">Password</label>
                    <input type="password" id="spass" name="spass" class="form-control">
                    <span class="logErr"></span>
                  </div> 
                </div>
              </div>                                                           
              <div class="btn_sub  py-3 text-center mx-auto">
                <input type="submit" value="Submit" id="subBtn">
              </div>
            </form>
          </div>
        </div>
          
      </section>

  
      <script src="js/jquery.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
  </body>
</html>