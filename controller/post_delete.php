<?php
require_once "../includ/env.php";

$id = $_GET['id']; 

$delete ="DELETE FROM post_table_fa WHERE id= $id";
$query =mysqli_query($connect, $delete);
header("location: ../all_post.php");