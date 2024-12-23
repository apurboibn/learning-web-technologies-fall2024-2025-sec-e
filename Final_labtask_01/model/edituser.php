<?php
$idd = $_REQUEST['id'];
$idt = $_REQUEST['idt'];
$name = $_POST['new_username'];
$email = $_POST['new_email'];
$type = $_POST['new_type'];
require_once("usermodel.php");

$result = edit_user($idt, $name, $email, $type);
if($result){
    echo "edited successfully";
}
else{
    echo "error";
}
?>

<a href="../view/viewusers.php?id=<?php echo $idd ?>">Back</a>