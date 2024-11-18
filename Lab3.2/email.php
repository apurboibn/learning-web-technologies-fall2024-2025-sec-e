<?php
if (isset($_POST['email_submit'])) 
{
    $email = $_POST['email'];

    if (empty($email)) 
    {
        echo "Email cannot be empty.";
    } 
    elseif (strpos($email, '@') === false || strpos($email, '.') === false || strpos($email, '@') > strrpos($email, '.')) 
    {
        echo "Invalid email format.";
    } 
    else 
    {
        echo "Email is valid.";
    }
}
?>
