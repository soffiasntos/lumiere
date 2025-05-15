<?php
require_once("conexao.php");
 ?>


<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <link rel="shortcut icon" type="image/x-icon" href="img/icone.png">


</head>
<body>
<section class="vh-100" style="background-color:rgb(28, 28, 28);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block"
            style: width: 100%; height: 300px; overflow: hidden;  >
              <img src= "img/i.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; border: 0; width: 100%; height: 100%; object-fit: cover; " />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">


              <form method="post" action="autenticar.php">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color:rgb(31, 26, 61);"></i>
                    <span class="h1 fw-bold mb-0">Lumiere</span>
                  </div>


                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>


                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label">Email Address</label>
                   
                    <input name="email" type="email" id="typeEmailX-2" class="form-control" placeholder="Email" required/>
                  </div>


                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label">Password</label>
                   
                    <input name="senha" type="password" id="typePasswordX-2" class="form-control "
                    placeholder="Senha" required/>
                  </div>


                  <div class="pt-1 mb-4">
                  <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit" style= "background-color:rgb(29, 29, 29)">Login</button>
                  </div>


                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color:rgb(52, 51, 46);">Don't have an account? <a href="#!"
                      style="color:rgb(39, 39, 39);">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




</body>
</html>