<?php

 class User extends Database{

    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function login($email, $password){
        try{

            $data = array(
                'user_email'=>$email,
                'user_password'=>md5($password),
            );

            $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);
            $n_rows = $query_run->rowCount();

            if($n_rows == 1) {
                // login je uspesny
                $_SESSION['logged_in'] = true;
                $_SESSION['is_admin'] = $query_run->fetch()->role;
                return true;
            } else {
                return false;
            }

        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    //user prints for admin
    public function register($email, $password){
        try{
            $hashed_password = $password;
        
            // Dáta pre vloženie nového používateľa do databázy
            $data = array(
                'user_email' => $email,
                'user_password' => md5($hashed_password),
                'user_role'=>'0'
            );

            // SQL dopyt na vloženie nového používateľa
            $sql = "INSERT INTO user (email, password,role) VALUES (:user_email, :user_password,:user_role)";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }
    public function select(){
        try{
            $sql = "SELECT * FROM user";
            $query =  $this->db->query($sql);
            $contacts = $query->fetchAll();
            return $contacts;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function delete(){
        try{
            $data = array(
                'contact_id' => $_POST['delete_contact']
            );
            $query = "DELETE FROM user WHERE id = :contact_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function selectres(){
        try{
            $sql = "SELECT * FROM researchers";
            $query =  $this->db->query($sql);
            $researchers = $query->fetchAll();
            return $researchers;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

 }
?>