<?php
    session_start();
    header("Content-type: application/json");
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        include "connection.php";
        include "functions.php";
        $clicked = $_GET['btnClk'];
        static $odgovor;
        var_dump($clicked);
        if($clicked == "clicked"){
            if(isset($_SESSION['user'])){
                unset($_SESSION['user']);
                $odgovor=["msg"=>"test123777"];
            }
        }
        echo json_encode($odgovor);
        http_response_code(200);
    }
?>