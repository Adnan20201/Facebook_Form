<?php

require_once "./he_fo/header.php";
require_once "./includ/env.php";




$select = "SELECT * FROM post_table_fa";

$query = mysqli_query($connect, $select);

$fetch = mysqli_fetch_all($query, 1);
// echo "<pre>";
// print_r($fetch);
// echo "</pre>";

?>


<div class="card col-12 mx-auto my-5">
  <div class="card-header">
    <h4>All User</h4>
  </div>
  <div class="card-body">
    <table class="table table-responsive">
      <tr>
        <th>#</th>
        <th>User Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Detail</th>
        <th>Date</th>
        <th>Actions</th>
        <th></th>
      </tr>
      <?php
      if (count($fetch) > 0) {
        foreach ($fetch as $key => $data) {
      ?>
          <tr>
            <td> <?= ++$key ?> </td>
            <td> <?= $data['name'] ?> </td>
            <td> <?= $data['email'] ?> </td>
            <td> <?= $data['password'] ?> </td>
            <td>
              <?php
              if (strlen($data['detail']) > 50) {
                echo substr($data['detail'], 0, 50) . "......";
              } else {
                echo $data['detail'];
              }
              ?>
            </td>

            <td> <?= $data['date'] ?> </td>
            <td> <a href="view_post.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-primary">Show</a></td>
            <td>
              <a href="edit_post.php?id=<?= $data['id'] ?>" class="btn btn-sm  btn-primary">Edit</a>
              <a href="./controller/post_delete.php?id=<?= $data['id'] ?>" class="btn btn-sm  btn-danger">Delete</a>
            </td>
          </tr>

      <?php
        }
      }else{
        ?>
      <h3 class="text-danger text-center mb-5">404 Not Found..!</h3>
      <?php
      }

      ?>


    </table>
  </div>
</div>


<?php

require_once "./he_fo/Footer.php"

?>