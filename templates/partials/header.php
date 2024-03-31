<?php
  require('../_inc/functions.php');
?>
<link rel="stylesheet" href="../css/style.css">

<nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-dark py-1 px-5">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src = "../img/TatyiLekaren.png" style = "width: 130px"></a>

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
                'FAQ'=>'faq.php'  
           );
           echo(generate_menu($pages));
            ?>
                  
            </ul>
          </div>
        </div>
      </nav>