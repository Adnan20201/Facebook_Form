<?php
session_start();

require_once "./he_fo/header.php";

?>


<style>
  .card {
    background-color: #999;
  }

  .hk {
	background-color: #999;
	width: 361px;
	margin-left: auto;
	margin-right: 247px;
	margin-top: 13px;
	padding-top: 29px;
	margin-bottom: 9px;
}

</style>

<!-- Toast  start-->

<?php
if (isset($_SESSION['success'])) {

?>
  <div class="toast-show hk" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="" class="rounded me-2 width:50px; height:50px;" alt="">
      <strong class="me-auto">Facebook_form</strong>
      <small>Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        <?= $_SESSION['success']?>
    </div>
  </div>

<?php

}

?>


<!-- Toast  End-->


<section class="pb-5 pt-3">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h2>Facebook_form</h2>
          </div>
          <div class="card-body">
            <form action="./controller/form_submit_store.php" method="POST">

              <div class="mb-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="form-control" id="name">
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_name'])) {
                    echo $_SESSION['error_name'];
                  }
                  
                  ?>
                </span>
              </div>

              <div class="mb-2">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" class="form-control" id="email">
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_email'])) {
                    echo $_SESSION['error_email'];
                  }

                  ?>
                </span>
              </div>

              <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control" id="password">
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_password'])) {
                    echo $_SESSION['error_password'];
                  }

                  ?>
                </span>
              </div>

              <div class="mb-2">
                <label for="text">User Detail</label>
                <textarea class="form-control" name="detail" placeholder="Enter user Detail" id="detail"></textarea>
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_detail'])) {
                    echo $_SESSION['error_detail'];
                  }
                  ?>
                </span>

              </div>

              <div class="mb-2">
                <label>date</label>
                <input type="date" name="date" class="form-control" id="date">
                <span class="text-danger">
                  <?php
                  if (isset($_SESSION['error_date'])) {
                    echo $_SESSION['error_date'];
                  }
                  ?>
                </span>
              </div>

              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php

require_once "./he_fo/footer.php";
session_unset();

?>