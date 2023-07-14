
<?php require_once "include/header.php" ?>
<?php require_once "include/navbar.php" ?>


    <div class="container">
      <div class="row">
          <div class="col-md-4 m-auto login_box pb-5 mt-5 ps-5 pe-5">
              <h2 class="mt-5 text-center pb-3">
                  User Login
              </h2>
      <form action="login_data.php" method="post">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          
      </div>
      <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password"  id="exampleInputPassword1">
      </div>
      <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <div class="d-flex justify-content-around align-items-center mb-3">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
          <label class="form-check-label" for="form1Example3"> Remember me </label>
        </div>
        <a href="#!">Forgot password?</a>
      </div>
      <button type="submit" class="btn btn_box1 mt-3">Submit</button>
      </form>

          </div>
      </div>
  </div>
  <?php require_once "include/footer.php" ?>
    <?php require_once "include/footer_btm.php" ?>