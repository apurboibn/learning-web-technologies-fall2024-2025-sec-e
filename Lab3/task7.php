<?php
print("<html><table border = '1' width='200' cellspacing='0'> <tr> ");
print("<td>");
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

print("</td>");
echo"<br>";

print("<td>");
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}


print("</td>");
echo"<br>";
print("<td>");
$word = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $word . " ";
        $word++;
    }
    echo "<br>";
}
print("</td>");
echo"<br>";
print("</tr></table></html>")
?>
