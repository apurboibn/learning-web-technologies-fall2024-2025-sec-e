<?php
if (isset($_POST['name_submit'])) {
    $name = $_POST['name'];

    if (empty($name)) {
       echo "Name cannot be empty.";
    } else {
        if (!ctype_alpha($name[0])) {
           echo "Name must start with a letter.";
        }
        if (strspn($name, "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ .-") != strlen($name)) 
        {
           echo "Name can contain only letters, spaces, periods, and dashes.";
        }
        if (str_word_count($name) < 2) {
           echo "Name must contain at least two words.";
        }
    }

    if (empty($errors)) {
        echo "Name is valid.";
    } else 
    {
        foreach ($errors as $error) 
        {
            echo "<p>$error</p>";
        }
    }
}
?>
