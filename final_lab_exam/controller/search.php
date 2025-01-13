<?php
require_once("../model/authorModel.php");

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $conn = get_connection();

    $sql = "SELECT * FROM authors WHERE author_name LIKE '%$search%' OR user_name LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr align='center'>
                <td>{$row['user_name']}</td>
                <td>{$row['author_name']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['password']}</td>
                <td><a href='edit.php?user_name={$row['user_name']}'><button>EDIT</button></a></td>
                <td><a href='../view/delete.php?user_name={$row['user_name']}'><button>DELETE</button></a></td>
            </tr>";
        }
    } else {
        echo "No Author found";
    }
} else {
    echo "Invalid Request";
}
?>
