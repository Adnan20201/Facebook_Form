<?php



?>



<style>
  .navbar {
    background-color: #999;
  }

  .navbar a,
  .main-color ul li a {
    color: #fff;
    font-size: 20px;
    font-weight: 500;
  }
</style>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg ">
    <div class="container">
      <a class="navbar-brand" href="#">PHP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse main-color" id="main_menu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Add User</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="all_post.php">All User Post</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>