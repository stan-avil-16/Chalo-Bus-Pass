<?php
session_start();
if (isset($_POST["submit"])){
  $city = $_POST["city"];  
  $refno = $_POST['refno'];  
  $bank = $_POST['bank'];
  $usermail= $_SESSION["email"];
  $plan= $_SESSION['id'];


  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  payment($con,$usermail,$plan,$city,$refno,$bank);

}

else{
    header("location: ../index.php");
}