<?php
include_once('partials/head.php');
  require_once('../_inc/functions.php');

    $user_object = new User();

    // Spracovanie údajov z formulára po odoslaní
    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        // Kontrola, či sa zadané heslá zhodujú
        if($password === $confirm_password) {
            // Volanie metódy register() na vytvorenie používateľa
            if($user_object->register($email, $password)) {
                echo "<p>Registrácia bola úspešná</p>";
            } else {
                echo "<p>Registrácia zlyhala</p>";
            }
        } else {
            echo "<p>Heslá sa nezhodujú</p>";
        }
    }
?>


<body>
    <section class="vh-100" style="background-color: #212529;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
              <div class="card text-black" style="border-radius: 25px; background-color: #a2a2af;">
                <div class="card-body p-md-1">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form class="mx-1 mx-md-4" action="" method="POST">
      
                    
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="email" name = "email" class="form-control" required/>
                            <label class="form-label" for="email">Email</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password" name="password" class="form-control" required/>
                            <label class="form-label" for="password">Password</label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-3">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="confirm_password" name = "confirm_password" class="form-control" required/>
                            <label class="form-label" for="confirm_pasword">Password</label>
                          </div>
                        </div>
                       
      
                        <div class="form-check d-flex justify-content-center mb-2">
                          <input class="form-check-input me-2" type="checkbox" value="1" required />
                          <label class="form-check-label" for="checkker">
                            I agree all statements in <a href="termsofservice.php">Terms of service</a>
                          </label>
                        </div>
                        <div class="form-check d-flex justify-content-center mb-1">
                          <label class="form-check-label">
                            <a href="login.php">I already have an account!</a>
                          </label>
                        </div>
                       
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg" name = "user_register">Register</button>

                          <a href="home.php" class="position-absolute end-0 px-5"><h1><i class="bi bi-skip-backward-btn-fill"></i></h1></a>

                        </div>
                      </form>
                          
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>    
<script src="js/bmi.js"></script>
</body>
</html>