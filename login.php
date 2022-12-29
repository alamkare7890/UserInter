<?php
 
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
        
        <div class="mx-0 row w-75 align-items-center justify-content-center">
          <div class="col-lg-6 mx-auto" >
            <div class="contact_area">
              <h2 class="text-center">Login In</h2>
              <form action="index.php" method="POST" onsubmit="return validForm()" id="login_form" name="login_form" class="sub_form">
                
                <div class="form-group">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" id="username" name="username" class="form-control">
                  <span  class="logErr"></span>
                </div>
                <div class="form-group">
                  <label for="pass" class="form-label">Password</label>
                  <input type="password" id="pass" name="pass" class="form-control">
                  <span class="logErr"></span>
                </div>
                               
                <div class="btn_sub  py-3 text-center mx-auto">
                  <input type="submit" value="Submit" id="subBtn">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

  
      <script src="js/jquery.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
  </body>
</html>