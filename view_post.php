<?php
require_once "./he_fo/header.php";
require_once "./includ/env.php";
$id = $_GET['id'];
$select = "SELECT * FROM post_table_fa WHERE id = $id";

$query = mysqli_query($connect, $select);
$fetch = mysqli_fetch_assoc($query);
// print_r($fetch);
?>



<div class="container">
  <div class="col-8 mx-auto mt-5">
    <div class="card-header">
      <h3>Post show</h3>
    </div>
    <div class="card-body">
      <table class="table table-responsive">
        <tr>
          <th>User Name</th>
          <th>Email</th>
          <th>Detail</th>
          <th>Date</th>
        </tr>
        <tr>
          <td><?= $fetch['name'] ?></td>
          <td><?= $fetch['email'] ?></td>
          <td><?= $fetch['detail'] ?></td>
          <td><?= $fetch['date'] ?></td>
        </tr>

      </table>

    </div>
  </div>
</div>



<?php
require_once "./he_fo/footer.php";

?>