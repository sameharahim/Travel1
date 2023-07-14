<?php 
require_once "include/database.php";
if(isset($_POST['submit'])){
  
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $last_name = htmlspecialchars(trim($_POST['last_name']));
    $email = htmlspecialchars(trim($_POST['email']));
    if(!empty($gender)){
      $gender = $_POST['gender'];
    }
    $password = htmlspecialchars(trim(md5($_POST['password'])));

    if(empty($first_name)){
      $firstNameError = "Please enter your first name";
    }
    if(empty($last_name)){
      $lastnameerror = "Please enter your last name";
    }
    if(empty($email)){
      $emailerror = "Please enter your email addres";
    }
    if(empty($password)){
      $passworderror = "Please enter your password";
    }
    else{
      $insert_quary = "INSERT INTO shouse(first_name,last_name,email,gender,password) VALUE('$first_name','$last_name','$email','$gender','$password')";
  $insert = mysqli_query($connect,$insert_quary);
  if(!$insert){
      header("location:index.php");
  }
    }
}

?>

<?php require_once "include/header.php" ?>
<?php require_once "include/navbar.php" ?>

      <div class="container form_making box2 login_box">
      <div class="row">
        <div class="main col-md-4 m-auto mt-3 pb-5">
          <h2 class="mt-1 text-center">Register Here</h2>
          <form action="" method="post" id="register">
            <div class="mt-1">
              <label for="" class="form-label">First Name :</label>
              <input type="text" class="form-control" name="first_name" placeholder="Enter your first name">
              <?php
                if(isset($_POST['submit'])){
                  if(empty($first_name)){
                    ?>
                    <p class="text-danger"><?=$firstNameError?></p>
                  <?php
                  }
                }
              ?>
            </div>
            <div class="mt-1">
              <label for="" class="form-label">Last Name :</label>
              <input type="text" class="form-control" name="last_name"  placeholder="Enter your last name">
              <?php
                if(isset($_POST['submit'])){
                  if(empty($last_name)){
                    ?>
                    <p class="text-danger"><?=$lastnameerror?></p>
                  <?php
                  }
                }
              ?>
            </div>
           
            <div class="mt-1">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your valid email">
              <?php
                if(isset($_POST['submit'])){
                  if(empty($email)){
                    ?>
                    <p class="text-danger"><?=$emailerror?></p>
                  <?php
                  }
                }
              ?>
            </div>
            <div class="mt-1">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password"  placeholder="Enter password">
              <?php
                if(isset($_POST['submit'])){
                  if(empty($password)){
                    ?>
                    <p class="text-danger"><?=$passworderror?></p>
                  <?php
                  }
                }
              ?>
            </div>
            <label for="" class="mt-3">Gender :</label>
            <div class="mt-1">
              <input type="radio" name="gender" selected class="male" value="Male">
              <label for="">Male</label>
              <input type="radio" name="gender" class="female" value="Female">
              <label for="">Female</label>
              <input type="radio" name="gender" class="other" value="Others">
              <label for="">Other</label>
              
            </div>
            <div class="mt-1 form-check">
              <input type="checkbox" class="form-check-input" name="checkbox" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <?php require_once "include/footer.php" ?>
    <?php require_once "include/footer_btm.php" ?>