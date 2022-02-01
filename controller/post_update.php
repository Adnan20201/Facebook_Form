<?php
 session_start();

 require_once "../includ/env.php";


if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $id = $_POST['id'];
  $detail = $_POST['detail'];





 $update =" UPDATE post_table_fa SET name='$name',email='$email' ,password='$password',detail='$detail' WHERE id = $id";

  mysqli_query($connect , $update);
  header('Location: ../all_post.php');




  // ALL VALIDATION START_______________________________________________

  // NAME VALIDATION Start_____
  if (empty($name)) {
    $_SESSION['error_name'] = "<h5>Please Enter Your Name</h5>";
    header("Location: ../edit_post.php");
  }
  // NAME VALIDATION Ends_____


  // EMAIL VALIDATION Start_____
  if (empty($email)) {
    $_SESSION['error_email'] = "<h5>Please Enter Your Email</h5>";
    header("Location: ../edit_post.php");
  }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $_SESSION['error_email'] = "<h5>Please Enter Your a valid Email</h5>";
    header("Location: ../edit_post.php");
  }
  // EMAIL VALIDATION END

  // PASSWORD  VALIDATION Start_____
  if (empty($password)) {
    $_SESSION['error_password'] = "<h5>Please Enter Your password </h5>";
    header("Location: ../edit_post.php");
  }
  // PASSWORD  VALIDATION Ends_____

  // DETAIL  VALIDATION Start_____
  if (empty($detail)) {
    $_SESSION['error_detail'] = "<h5>Please Enter Your Detail</h5>";
    header("Location: ../edit_post.php");
  }
  // DETAIL VALIDATION Ends_____

// DATA VALIDATION Start_____
if (empty($date)) {
  $_SESSION['error_date'] = "<h5>Please Enter Your DATA</h5>";
  header("Location:../index.php");
}
// DATA VALIDATION Ends_____
  // ALL VALIDATION END_______________________________________________


} else {
  echo "Value Not Fount..!";
}


require_once "./he_fo/footer.php";
session_start();

?>