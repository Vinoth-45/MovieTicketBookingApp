<?php
include "../includeuser/db.php";


// Check user login or not
/*if (!isset($_SESSION['uname'])) {
    header('Location:admin.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: admin.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php include('header.php'); ?>

    <div class="admin-container">

        <?php include('sidebar.php'); ?>
        <div class="container-lg">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <h2>Booking <b>Details</b></h2>
                            </div>
                            <!--<div class="col-sm-4">
                                <a href='add.php'><button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button></a>
                            </div>-->
                        </div>
                    </div>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Booking ID</th>
                            <th>Email</th>
                            <th>Movie Name</th>



                            <th>Booking Date&Time</th>

                            <th>Show Time</th>
                            <th>Class Type</th>
                            <th>Order ID</th>
                            <th>Amount</th>
                            <th>More</th>

                        </tr>
                        <tbody>
                            <?php

                          //  $con = mysqli_connect($host, $user, $password, $dbname);
                            $select = "SELECT * FROM `bookingtable`";
                            $run = mysqli_query($link, $select);
                            while ($row = mysqli_fetch_array($run)) {
                                $bookingid = $row['b_id'];
                                $movieName = $row['b_movie_name'];
                                $dateandtime = $row['b_date&time'];
                                $email = $row['user_email'];
                               
                                $class = $row['b_class'];
                                $stime = $row['b_stime'];
                              
                                $amount = $row['b_amount'];

                                

                            ?>
                            <tr align="center">
                                <td><?php echo $bookingid; ?></td>
                                <td><?php echo $email; ?></td>

                                <td><?php echo $movieName; ?></td>


                                <td><?php echo $dateandtime; ?></td>


                                <td><?php echo $stime; ?></td>
                                <td><?php echo $class; ?></td>
                                <td><?php echo "PVR".$bookingid; ?></td>
                                <td><?php echo $amount; ?></td>
                                <td><button type="submit" type="button"
                                        class="btn btn-outline-danger"><?php echo  "<a href='deleteBooking.php?id=" . $row['b_id'] . "' >Delete</a>"; ?></button>

                            </tr>

                            <?php }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>