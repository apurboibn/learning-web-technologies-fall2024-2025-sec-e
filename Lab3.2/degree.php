<?php
if (isset($_POST['degree_submit'])) {
    $degrees = $_POST['degree'] ?? [];

    if (count($degrees) < 2) {
        echo "<p>Please select at least two degrees.</p>";
    } else {
        echo "Degree selection is valid.";
    }
}
?>
