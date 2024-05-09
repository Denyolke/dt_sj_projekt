<body>
    <?php
    include_once('partials/header.php');
    include_once('partials/head.php');
    
    ?>  

      
<?php
    $research_object = new User();
    $researchers = $research_object->selectres();
    echo'<section class="p-5 mt-5">';
    echo '<table class="table table-striped">';
    echo '<tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Handle</th>
                
            </tr>';
    foreach($researchers as $c){
        
        echo '<tr>';
        echo '<td>'.$c->id;'</td>';
        echo '<td>'.$c->first_name;'</td>';
        echo '<td>'.$c->last_name;'</td>';
        echo '<td>'.$c->handle;'</td>';
        
        echo '</tr>';
    }
        
    echo '</table>';
    
    echo'  </section>';
  include_once('partials/footer.php');
  ?> 
</body>
</html>