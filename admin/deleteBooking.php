<?php 
    $id = $_GET['id'];
include "../includeuser/db.php";

    $sql = "DELETE FROM bookingTable WHERE b_id = $id"; 

    if ($link->query($sql) === TRUE) {
        header('Location: booking.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>