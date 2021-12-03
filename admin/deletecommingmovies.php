<?php 
    $id = $_GET['id'];
include "../includeuser/db.php";

    $sql = "DELETE FROM commingtable WHERE m_id = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: upcommingmovies.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>