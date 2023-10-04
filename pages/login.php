<?php
    session_start();
    header("Content-type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "connection.php";
        include "functions.php";

        try{
            $username = $_POST['name'];
            $password = $_POST['pass'];

            $regExpUser = "/^[\w]{3,20}$/";
            $regExpPass = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,20}$/";
            $errors = 0;
            static $odgovor;
            if(!preg_match($regExpUser, $username)){
                $errors++;
            }
            if(!preg_match($regExpPass, $password)){
                $errors++;
            }
            if($errors != 0){
                
            }
            else{
                $cryptPass = md5($password);
                $userObj = testLogin($username, $cryptPass);
                if($userObj){
                    $_SESSION['user'] = $userObj;
    
                    $odgovor = ["roleName"=>$userObj->RoleName];
                    
                }
            }
            echo json_encode($odgovor);
            http_response_code(200);
            
        }
        catch(PDOException $exception){
            http_response_code(500);
        }
    }
    else{
        http_response_code(404);
    }
?>