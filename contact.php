<?php


  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $email = $_POST['uEmail'];
    $phone = $_POST['uPhone'];
    $mess = $_POST['uText'];
  
    require 'part/dbconnect.php';

    $sql = "INSERT INTO `contact_us` (`firstname`, `lastname`, `email`, `phone`, `message`) VALUES ('$fname', '$lname', '$email', '$phone', '$mess')";

    $result = mysqli_query($connection, $sql);

    if(!$result){
      echo 'Can not save it';
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

    <section class="contact_us py-5" style="background-image: url(img/olivier-guillard-xnGu_KGrqX8-unsplash.jpg);">        
      <div class="mx-0 row align-items-center justify-content-center">
        <div class="col-md-6">
          <div class="contact_area">
            <h2>Contact Us</h2>
            <form action="index.php" method='post' id="form_send" name="form_send" class="sub_form">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="fName" class="form-label">Frist Name</label>
                    <input type="text" id="fName" name="fName" class="form-control">
                    <span class="err"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="lName" class="form-label">Last Name</label>
                    <input type="text" id="lName" name="lName" class="form-control">
                    <span class="err"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="uEmail" class="form-label">Email</label>
                    <input type="email" id="uEmail"  name="uEmail" class="form-control">
                    <span class="err"></span>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="uPhone" class="form-label">Phone</label>
                    <input type="number" id="uPhone" name="uPhone" class="form-control">
                    <span class="err"></span>
                  </div>
                </div>
              </div>        
              <div class="form-group">
                <label for="uText" class="form-label">Message</label>
                <textarea name="uText" id="uText" class="form-control">
                </textarea>
                <span class="err"></span>
              </div>
              <div class="btn_sub  py-3 text-center">
                <input type="submit" value="Submit" id="subBtn">
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <!--<img src="img/contactimg.jpg" class="w-100" alt="">-->
        </div>

      </div>
    </section>




    
  <script src="js/jquery.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
  </body>
</html>