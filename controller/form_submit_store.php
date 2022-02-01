<?php
session_start();
require_once "../includ/env.php";




if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $detail = $_POST['detail'];
  $date = $_POST['date'];



  // ALL VALIDATION START_______________________________________________

  // NAME VALIDATION Start_____
  if (empty($name)) {
    $_SESSION['error_name'] = "<h5>Please Enter Your Name</h5>";
    header("Location:../index.php");
  }
  // NAME VALIDATION Ends_____


  // EMAIL VALIDATION Start_____
  if (empty($email)) {
    $_SESSION['error_email'] = "<h5>Please Enter Your Email</h5>";
    header("Location:../index.php");
  }
  // EMAIL VALIDATION END

  // PASSWORD  VALIDATION Start_____
  if (empty($password)) {
    $_SESSION['error_password'] = "<h5>Please Enter Your password </h5>";
    header("Location:../index.php");
  }
  // PASSWORD  VALIDATION Ends_____

  // DETAIL  VALIDATION Start_____
  if (empty($detail)) {
    $_SESSION['error_detail'] = "<h5>Please Enter Your Detail</h5>";
    header("Location:../index.php");
  }
  // DETAIL VALIDATION Ends_____

  // DATA VALIDATION Start_____
  if (empty($date)) {
    $_SESSION['error_date'] = "<h5>Please Enter Your DATA</h5>";
    header("Location:../index.php");
  }
  // DATA VALIDATION Ends_____


  // ALL VALIDATION END_______________________________________________

   else{

    $enc_password = sha1($password);
    $strToDate = strtotime($date);

    $formateDate = date('D d, M Y', $strToDate);

     $insert = "INSERT INTO post_table_fa( name, email, password, detail, date) 

     VALUES ('$name',' $email','$enc_password','$detail','$formateDate')";

     $query = mysqli_query( $connect, $insert);

     if($query){
       header("location: ../index.php");
       $_SESSION['success'] = "Your post has been uploaded";
     }

   }


} else {
  echo "Value Not Fount..!";
}
