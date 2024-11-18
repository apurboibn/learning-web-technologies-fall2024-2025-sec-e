<?php
if (isset($_POST['gender_submit'])) {
    $gender = $_POST['gender'] ?? null;

    if (empty($gender)) {
        echo "<p>Please select a gender.</p>";
    } else {
        echo "Gender is valid.";
    }
}
?>