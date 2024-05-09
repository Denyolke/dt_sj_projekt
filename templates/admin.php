<?php
include_once('partials/header.php');
include_once('partials/head.php');

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
    
        header('Location: 404.php');
    
}
?> 
    <main>
        <br><br><br>
      <section class="container">
        <div class="row">
            <div class="col-100">
                
                <?php
                    //print_r($_SESSION);
                    if($_SESSION['is_admin'] == 1){
                        echo'<h1>Admin rozhranie</h1>';

                        echo 'cum';
                        echo 'cum';
                    }
                ?>
            </div>
        </div>
      </section>
    </main>
    
