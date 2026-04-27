<?php

    session_start();

    require_once '../models/Database.php';
    require_once '../models/User.php';

    $database = new Database();
    $dbConnection = $database->getConnection();

    //Validate Request Method

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        //Get ID & Password
        $id = $_POST['id'];
        $password = $_POST['password'];
        
        //Input Validation
        if(empty($id) OR empty($password)){

            header("Location: ../views/login.php?error=missing_credentials");
            exit();

        } else {

            //Calls Model
            $userModel = new User($dbConnection);
                        
            //Finds User
            $userData = $userModel->find($id);

            if($userData){
                
                //Match Data
                if($password === $userData['password']){
                    $_SESSION['username'] = $userData['username'];

                    header("Location: ../views/dashboard.php");
                    exit();
                } else {
                    header("Location: ../views/login.php?error=wrong_pass");
                    exit();
                }

            } else {
                header("Location: ../views/login.php?error=acct_dont_exist");
                exit();
            }

        }
    }
?>