<?php
include_once('partials/head.php');
require_once('../_inc/functions.php');


if(isset($_POST['user_login'])){
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $user_object = new User();

    $login_success = $user_object->login($email,$password);
    //ak metóda vráti TRUE
    if($login_success == true){
        header('Location: admin.php');
        die;
    }else{
        echo 'Nesprávne meno alebo heslo';
        
    }

}


?>
<body>
    <section class="vh-100" style="background-color: #212529;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-8 col-xl-8">
              <div class="card text-black" style="border-radius: 25px; background-color: #a2a2af;">
                <div class="card-body p-md-2">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log in</p>
      
                      <form class="mx-1 mx-md-4" action="" method="POST">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email" />
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-2">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" />
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-center mb-3">
                          <label class="form-check-label" for="form2Example3">
                            I dont have an account. <a href="formular.php">Register!</a>
                          </label>
                        </div>
                       
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" value="Odoslať" name="user_login" class="btn btn-primary btn-lg">Log in</button>
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
</body>
</html>