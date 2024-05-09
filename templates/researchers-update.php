<br><br><br>
<?php
    include_once('partials/header.php');
    
    $contact_object = new User();

    if(isset($_POST['edit_contact'])) {
        $edit_contact_id = $_POST['edit_contact'];
        $contact_data = $contact_object->select_single($edit_contact_id);
        //print_r($contact_data);
    }

    if($contact_data) {
        // Vyplnenie údajov do formulára
        $first_name = $contact_data->first_name;
        $last_name = $contact_data->last_name;
        $handle = $contact_data->handle;
    }
    if(isset($_POST['edit_contact_id'], $_POST['first_name'], $_POST['last_name'],$_POST['handle'])) {
        $edit_contact_id = $_POST['edit_contact_id'];
        $new_data = array(
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'handle' => $_POST['handle']
        );
    
        $contact_object->edit($edit_contact_id, $new_data);
    
        header('Location: researchers.php');
        exit();
    }
    
?>
<main>
<br><br><br>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-5 col-xl-5">
              <div class="card text-black" style="border-radius: 25px; background-color: #212529;">
                <div class="card-body p-md-2">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl- order-2 order-lg-1">
                <form action="" method="POST">
                    <label for="first_name" style="color:White">First name:</label>
                    <br>
                    <input type="text" id="first_name" name="first_name" value="<?php echo $first_name?>">
                    <br>
                    <label for="last_name" style="color:White">Last name:</label>
                    <br>
                    <input type="text" id="last_name" name="last_name" value="<?php echo $last_name?>">
                    <br>
                    <label for="handle" style="color:White">Handle:</label>
                    <br>
                    <input type="text" id="handle" name="handle"  value="<?php echo $handle?>">
                    <br>
                    <br>
                    <button type="submit"name="edit_contact_id" class="btn btn-primary btn-md" value="<?php echo $edit_contact_id?>">Edit</button>

                </form>
                </div>
                </div>
                </div>
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>
</main>

