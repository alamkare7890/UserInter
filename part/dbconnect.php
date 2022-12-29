<?php
  $servername = 'localhost';
  $serusers  = 'root';
  $password = '';
  $database = 'userinterface';

  $connection = mysqli_connect($servername, $serusers, $password, $database);

  if(!$connection){
    echo 'Please try again.';
  };
?>