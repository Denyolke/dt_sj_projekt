<h2>Users display:</h2>
<?php
include_once('partials/head.php');


    $contact_object = new User();
    $contacts = $contact_object->select();
    if(isset($_POST['delete_contact'])){
        $contact_id = $_POST['delete_contact'];
        $contact_object->delete($contact_id);
        header('Location: admin.php');
        exit();
    }
    echo '<table class="table table-dark table-striped">';
    echo '<tr>
                <th>Email</th>
                <th>Password</th>
                <th>Role</th>
                <th>Registration time</th>
                <th>Delete</th>
            </tr>';
    foreach($contacts as $c){
        if($c->role != 1)
        {
        echo '<tr>';
        echo '<td>'.$c->email;'</td>';
        echo '<td>'.$c->password;'</td>';
        echo '<td>'.$c->role;'</td>';
        echo '<td>'.$c->registration_time;'</td>';
        echo '<td>

                <form action="" method="POST">
                    <button type="submit" name="delete_contact" value="'.$c->id.'"'.'>Vymazať</button>
                </form>
                </td>';
        echo '</tr>';
    }
    }
        
    echo '</table>';
?>
