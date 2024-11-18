<?php
if (isset($_POST['email_submit'])) 
{
    $email = $_POST['email'];

    if (empty($email)) 
    {
       echo  "Email cannot be empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
       echo  "Invalid email format.";
    }

    if (empty($errors)) 
    {
        echo "Email is valid.";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
