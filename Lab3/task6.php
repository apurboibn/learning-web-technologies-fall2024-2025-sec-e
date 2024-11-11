<?php
$array = [1,2,3,4,5,6,7];
$search = 12;     
$get = false;

foreach ($array as $arr) {
    if ($arr == $search) {
        $get = true;
        break;
    }
}

if ($get) {
    echo "Element $search found in the array!<br>";
} else {
    echo "Element $search not found in the array!";
}
?>
