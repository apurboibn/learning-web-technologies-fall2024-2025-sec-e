<?php
if (isset($_POST['blood_group_submit'])) 
{
    $blood_group = $_POST['blood_group'] ?? null;

    if (empty($blood_group)) {
        echo "<p>Please select a blood group.</p>";
    } else {
        echo "Blood group is valid.";
    }
}
?>

