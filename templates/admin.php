<?php
include_once('partials/header.php');
include_once('partials/head.php');

if(!$_SESSION['logged_in'] == true || $_SESSION['is_admin']==0){
    
        header('Location: error.php');
    
}
?> 
    <main>
        <br><br><br>
      <section class="container">
        <div class="row">
            <div class="col-100">
                
                <?php
                    
                    if($_SESSION['is_admin'] == 1){
                        echo'<h1>Admin rozhranie</h1>';
                        echo'<br><br><br>';
                        include('partials/admin-users.php');
                    }

                ?>
            </div>
        </div>
      </section>

    </main>
    
