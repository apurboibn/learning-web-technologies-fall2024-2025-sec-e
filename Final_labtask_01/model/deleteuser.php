<?php
$idd = $_REQUEST['id'];
$idt = $_REQUEST['idt'];
require_once("usermodel.php");

$result = delete_user($idt);
if($result){
    echo "user successfully deleted";
}
else{
    echo "error deleting user";
}
?>

<a href="../view/viewusers.php?id=<?php echo $idd ?>">Back</a>
