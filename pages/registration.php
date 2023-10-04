<?php
    header("Content-type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "connection.php";
        include "functions.php";

        try{
            $username = $_POST['name'];
            $email = $_POST['mail'];
            $password = $_POST['pass'];

            $regExpUser = "/^[\w]{3,20}$/";
            $regExpMail = "/^[\w\.]{1,50}@[\w]{1,50}(\.[\w]{2,50}){1,10}$/";
            $regExpPass = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,20}$/";
            $errors = 0;
            if(!preg_match($regExpUser, $username)){
                $errors++;
            }
            if(!preg_match($regExpMail, $email)){
                $errors++;
            }
            if(!preg_match($regExpPass, $password)){
                $errors++;
            }
            if($errors != 0){
                $odgovor = ["poruka"=>"Greska pri unosu."];
            }
            else{
                $cryptPass = md5($password);
                $roleId = 2;
                insertUser($username, $email, $cryptPass, $roleId);
                $odgovor = ["poruka"=>"Uspešan unos."];

            }
            echo json_encode($odgovor);
            http_response_code(201);
        }
        catch(PDOException $exception){
            http_response_code(500);
        }
    }
    else{
        http_response_code(404);
    }
?>