<?php
session_start();
if ($_SESSION['status'] == true) {
?>
    <html>
        <head>
            <title>Home Page</title>
        </head>
        <body>
            <h1 align="center">User Information</h1>
            <table align="center" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>
            <table align="center" border="0" cellspacing="0" cellpadding="10">
                <tr>
                    <td width="200"><b>Name</b></td>
                    <td width="300">: <?php echo $_SESSION["username"]; ?></td>
                </tr>
                <tr>
                    <td><b>Email</b></td>
                    <td>: <?php echo $_SESSION["email"]; ?></td>
                </tr>
                <tr>
                    <td><b>ID</b></td>
                    <td>: <?php echo $_SESSION["id"]; ?></td>
                </tr>
                <tr>
                    <td><b>Department</b></td>
                    <td>: <?php echo $_SESSION["dept"]; ?></td>
                </tr>
                <tr>
                    <td><b>Date of Birth</b></td>
                    <td>: <?php echo $_SESSION["dob"]; ?></td>
                </tr>
                <tr>
                    <td><b>Gender</b></td>
                    <td>: <?php echo $_SESSION["gender"]; ?></td>
                </tr>
                <tr>
                    <td colspan="2" align="right">
                        <a href="logout.php">Logout</a>
                    </td>
                </tr>
            </table>
            </td>
                </tr>
            </table>
        </body>
    </html>
<?php
} else {
    header("location:login.html");
}
?>