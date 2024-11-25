<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);

        if($username == null || empty($password)){
            echo "Null username/password";
        }elseif($_SESSION["username"] === $username && $_SESSION["password"]=== $password){
            //echo "valid user";
            $_SESSION['status'] = true;
            $_SESSION['username'] = $username;
            header('location: home.php');
        }
    
    }else{
        //echo "invalid request!";
        header('location: login.html');
    }

?>