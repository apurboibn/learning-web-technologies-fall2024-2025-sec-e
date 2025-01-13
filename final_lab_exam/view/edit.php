<?php
require_once('../model/authorModel.php');
$user_name = $_REQUEST['user_name'];
$author_info = author_info($user_name);

$author_name = $author_info['author_name'];
$contact_no = $author_info['contact_no'];
$password = $author_info['password'];
?>

<html>
<head>
    <title>Edit User Page</title>
</head>
<body>
    <table align="center">
        <form action="../controller/editcheck.php" method="POST" onsubmit="return validateForm()">
            <h1 style="text-align: center;font-size: 60px;">Edit Author</h1>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" readonly value="<?php echo $user_name ?>" name="old_user_name" id="old_user_name_id">
                </td>
            </tr>
            <tr>
                <td>Author Name</td>
                <td>
                    <input type="text" disabled value="<?php echo $author_name ?>" id="old_author_name_id">
                </td>
            </tr>
            <tr>
                <td>New Author Name</td>
                <td>
                    <input type="text" name="new_author_name" id="new_author_name_id" onkeyup="check_author_name()">
                    <p id="author_name_val" style="display:none;color: red;">Author name cannot be null</p>
                </td>
            </tr>
            <tr>
                <td>Contact No</td>
                <td>
                    <input type="text" disabled value="<?php echo $contact_no ?>" id="old_contact_no_id">
                </td>
            </tr>
            <tr>
                <td>New Contact No</td>
                <td>
                    <input type="text" name="new_contact_no" id="new_contact_no_id" onkeyup="check_contact_no()">
                    <p id="contact_no_val" style="display:none;color: red;">Contact number cannot be null</p>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="text" disabled value="<?php echo $password ?>">
                </td>
            </tr>
            <tr>
                <td>New Password</td>
                <td>
                    <input type="text" name="new_password" id="new_password_id" onkeyup="check_password()">
                    <p id="password_val" style="display:none;color: red;">Password cannot be null</p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name="submit">
                    &nbsp; &nbsp; &nbsp;
                    <input type="reset" value="Reset" name="reset">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <a href="showauthor.php">Go Back</a>
                </td>
            </tr>
        </form>
    </table>
    <script src="../asset/editauthor.js"></script>
</body>
</html>
