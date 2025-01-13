<?php
    session_start();
    require_once("../model/authorModel.php");
    $result = show_author();
?>
<html>
<head>
    <title>View Authors List</title>
</head>
<body>
        <h1 align="center" style="font-size:60px; text-align:center">Author List</h1>

        <div style="display:flex; justify-content:center; margin-bottom:20px;">
            <input style="padding:10px 20px; font-size:16px;" type="text" id="search" placeholder="Search author by name...">
            <button style="padding:10px 20px; font-size:16px; margin-left:10px;" onclick="search_author()">Search</button>
        </div>

        <table border=1 cellspacing="0" align="center" width="50%" id="table1" class="table">
        <thead>
            <tr align="center">
                <th>User Name</th>
                <th>Author Name</th>
                <th>Contact No</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr align="center">                          
                <td><?php echo $row['user_name']; ?></td>
                <td><?php echo $row['author_name']; ?></td>
                <td><?php echo $row['contact_no']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td>
                    <a href="../view/edit.php?user_name=<?php echo $row['user_name']?>"> <button>
                        update
                    </button> </a> 
                </td>
                <td>
                    <a href="../view/delete.php?user_name=<?php echo $row['user_name']?>"> <button>
                        delete
                    </button> </a> 
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>

    <script src="../asset/searchauthor.js"></script>

</body>
</html>
