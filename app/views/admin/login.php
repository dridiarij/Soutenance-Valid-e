<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/index.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/tunisietelecom/app/controllers/AdminController.php";

session_start();
if (isset($_SESSION['admin'])) {

  header("Location: /tunisietelecom/admin/dashboard");
  die();
}
$adminmodel = new AdminModel();
$admin = new Authentication($adminmodel);
$admin->login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tunisietelecom/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/tunisietelecom/assets/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css" integrity="sha384..." crossorigin="anonymous">

    
    <title>DELL Shop</title>
</head>

<body>
<section class="vh-100" style="margin-top:90px;">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="/tunisietelecom/assets/images/admin-login.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="/tunisietelecom/admin/login" method="POST">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3" style="margin-left:160px;">Admin Panel</p>
            
          </div>


          <!-- Email input -->
          <div class="form-outline mb-4" style="margin-top:15px;">
            <input type="email" id="form3Example3" class="form-control form-control-lg"
              placeholder="Email Address" name="adminemail" autocomplete="off" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="Password" name="adminpassword" />
          </div>
          <div class="pt-1 mb-4" >
                    <button  style="margin-left:95px;width: 250px;" class="btn btn-primary btn-lg btn-block" type="submit">Log In</button>
        </div>
          



        </form>
      </div>
    </div>
  </div>
  
</section>

</body>
<script src="/tunisietelecom/assets/js/bootstrap.js"></script>
<script src="/tunisietelecom/assets/js/bootstrap.bundle.js"></script>
<script src="/tunisietelecom/assets/js/bootstrap.esm.js"></script>

</html>