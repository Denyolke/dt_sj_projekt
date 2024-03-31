<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>TatyiPharma</title>
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark py-1 px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html"><img src = "img/TatyiLekaren.png" style = "width: 130px"></a>

          <button class="navbar-toggler" type="button" 
          data-bs-toggle="collapse" 
          data-bs-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" 
          aria-expanded="false" 
          aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-3">
              <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#aboutus">About us</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" aria-current="page" href="#gallery">Gallery</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="bmi.html">BMI</a>
              </li>
              <li class="nav-item ms-3">
                <a class="nav-link" href="faq.html">FAQ</a>
              </li>
              <li class="nav-item position-absolute end-0 px-5">
                <a class="nav-link" href="index.html"><i class="bi bi-person-circle"></i> Log out</a>
              </li>         
            </ul>
          </div>
        </div>
      </nav>
    <!--Top-->
    <section class="bg-dark text-light p-5 text-center">
        <div class="container">
            <div class = "d-sm-flex align-items-center justify-content-between">
            <div>
                <h1>Join our team!</h1>
                <p class ="lead my-4">
                    We are hiring, people who want to help others, if you'd like to become a member of our research team, you can sign up right here, or you can read more about us down below. 
                </p>
                <a href="formular.html"><button class = "btn btn-primary btn-lg">Sign up</button></a>
            </div>
            
           <img class = "img-fluid d-none d-sm-block" style="width: 40%;" src = "img/us.png"/>
          
           </div>
        </div>
    </section>
    <!--About us-->
    <section id = "aboutus" class="p-5">
        <div class = "container">
            <div class="row align-items-center justify-content-between">
              
                <div class="col-md p-5">
                    <h2>About us</h2>
                    <div class ="text">
                        We are a medical research company, dealing in the testing and making of new medicines. With the help of our talented people, we made lifelong changes
                        on the world, are you not intrested yet?<br>
                        
                    </div>
                    </div>
                    <div class="col-md">
                        <img class = "img-fluid" style="width: 60%; border-radius: 10px;" src = "img/docandnurse.png">
                    </div>
                 
                </div>
                <div class="row align-items-center justify-content-between">
              
                    <div class="col-md p-5">
                        <img class = "img-fluid" style="width: 60%; border-radius: 10px;" src = "img/office.jpg">
                       
                        </div>
                        <div class="col-md-6">
                            <div class ="text" style="text-align: right;">
                                The best technologies in the world are now avaiable for you to expand your knowledge, if you'd like to read more
                                about us, you can do it here. We would be really happy if you'd join our fleet. <br>
                                <a href="researchers.html" class="btn btn-dark mt-3">
                                Read More
                                </a>
                            </div>
                        </div>
                     
                    </div>
                
            </div>
    </section>
 <!--Gallery-->
 <section class="bg-dark text-light p-5 text-center" id = "gallery">
    <div class="container-fluid justify-content center align-items-center">
    <h3>Gallery</h3>
 <div id="carouselExampleCaptions" class="carousel slide "  style="max-width: 50vw; justify-content: center; align-items: center;">
    
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="img/r1r.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/r2r.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/r3r.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/r4r.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
  </div>
  </div>  
 </section> 
 <!--Contact-->
 <section id = "contact" class="p-5">
    <div class = "container">
        <div class = "rwo g-4">
        <div class="col-md">
            <h2 class = "text-center mb-4">Contact</h2>
            <ul class="list-group list-group-flush lead">
                <li class="list-group-item">
                    <span class="fw-bold">Name:</span>
                    Univerzita Konštantína Filozofa v Nitre
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Location:</span>
                    Tr. A. Hlinku 1, 949 01 Nitra
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Tel:</span>
                    +421 37 6408 111
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Email:</span>
                    ukf@ukf.sk
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Ičo:</span>
                    00157716
                </li>
                <li class="list-group-item">
                    <span class="fw-bold">Dič:</span>
                    2021246590
                </li>
            </ul>
        </div>
        </div>
    
    </div>
 </section>
 <!--Footer-->
<footer class = "p-5 bg-dark text-white text-center position-relative">
    <div class = "container-fluid">
        <div class="row align-items-center justify-content-between">
          
            <div class="col-md p-5">
                <p class="lead"> Website of the TatyiPharmacy research company.<br>
                    Made via Bootstrap. <i class="bi bi-bootstrap"></i></p>
                
                </div>
                <div class="col-md">
                    <p class="lead">Copyright &copy; 2023 Dániel Tátyi</p>
                </div> 
                <div class="col-md">
                    <p class="lead">
                        <a href="https://www.facebook.com/tatyi.dani" style="text-decoration: none;"><i class="bi bi-facebook"> Dániel Tátyi</i></a><br>
                        <a href="https://www.instagram.com/tatyi_daniel/" style="text-decoration: none;"><i class="bi bi-instagram"> tatyi_daniel</i></a><br>
                        <a href="https://www.snapchat.com/" style="text-decoration: none;"><i class="bi bi-snapchat"> tatyi_danixd</i></p></a><br>
                        <a href = "#" class = "position-absolute bottom end-0 px-5">
                          <i class = "bi bi-arrow-up-circle h1"></i>
                          </a>
                </div>
                 
            </div>
        </div>
</footer>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>