<?php 
    $id = $_GET['id'];
include "../includeuser/db.php";

    $sql = "DELETE FROM users WHERE id = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: users.php');
        echo "Removed Successfully!";
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>