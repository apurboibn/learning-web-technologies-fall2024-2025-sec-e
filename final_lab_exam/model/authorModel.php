<?php
function get_connection(){
    $conn = mysqli_connect("127.0.0.1", "root", "", "blogdb" );
    return $conn;
}

function add_author($user_name, $author_name, $contact_no, $password)
{
    $conn = get_connection();
    $sql = "INSERT INTO authors (user_name, author_name, contact_no, password) VALUES ('$user_name', '$author_name', '$contact_no', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function author_login($user_name, $password){
    $conn = get_connection();
    $sql = "SELECT * FROM authors WHERE user_name = '{$user_name}' AND password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function show_author(){
    $conn = get_connection();
    $sql = "SELECT * FROM authors";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function author_info($user_name){
    $conn = get_connection();
    $sql = "SELECT * FROM authors WHERE user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row; 
}

function change_author_info($old_user_name, $new_author_name, $new_contact_no, $new_password){
    $conn = get_connection();
    $sql = "UPDATE authors SET author_name = '$new_author_name', contact_no = '$new_contact_no', password='$new_password' WHERE user_name = '$old_user_name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete_author($user_name){
    $conn = get_connection();
    $sql = "DELETE FROM authors WHERE user_name = '$user_name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

?>
