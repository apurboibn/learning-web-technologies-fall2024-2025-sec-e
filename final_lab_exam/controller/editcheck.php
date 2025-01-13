<?php
require_once("../model/authorModel.php");

$old_user_name = $_POST['old_user_name'];
$new_author_name = $_POST['new_author_name'];
$new_contact_no = $_POST['new_contact_no'];
$new_password = $_POST['new_password'];

// Validation to ensure fields are not empty
if (empty($new_author_name) || empty($new_contact_no) || empty($new_password)) {
    echo "All fields must be filled out.";
    exit();
}

$result = change_author_info($old_user_name, $new_author_name, $new_contact_no, $new_password);

if ($result) {
    echo "Edit success";
} else {
    echo "Failed to edit user";
}
?>
