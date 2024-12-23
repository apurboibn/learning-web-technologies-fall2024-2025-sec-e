<?php
session_start();
if($_SESSION['status'] == true){
$idd = $_POST['id'];
$new_pass = $_POST['password'];
        $conn = mysqli_connect('127.0.0.1', 'root', '', 'check');
        // var_dump($conn);
        $sql = "UPDATE users set password = '$new_pass' where id = '$idd'";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Password changed successfully";
        }
        else{
            echo "error";  
        }

}

else{
    header("location:login.html");  
}

?>