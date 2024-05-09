<?php
  require('../_inc/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <title>TatyiPharma</title>
</head>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark py-1 px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><img src = "../img/TatyiLekaren.png" style = "width: 130px"></a>

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
            <?php
           $pages = array('Home'=>'home.php',
                'Researchers'=>'researchers.php',
                'BMI'=>'bmi.php',
                'FAQ'=>'faq.php',
                'Login' => "login.php",
                'Register' => "formular.php"  
           );
           if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
            $pages['Logout'] = 'logout.php';
            unset($pages['Login']);
            unset($pages['Register']);
         }

           $menu_object  = new Menu($pages);
           echo($menu_object->generate_menu());

           
            ?>
                  
            </ul>
          </div>
        </div>
      </nav>