<?php
if (isset($_POST['dob_submit'])) 
{
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $errors= [];

    if (empty($day) || empty($month) || empty($year))
    {
        $errors= "Date of birth cannot be empty.";

    } elseif (!checkdate($month, $day, $year)) 
    {
        $errors= "Invalid date.";
    } elseif ($year < 1953 || $year > 1998) 
    {
        $errors= "Year must be between 1953 and 1998.";
    }

    if (empty($errors)) {
        echo "Date of Birth is valid.";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>