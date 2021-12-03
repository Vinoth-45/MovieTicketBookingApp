<?php
include "../includeuser/db.php";
session_start();

// Check user login or not
if (!isset($_SESSION['username'])) {
header('Location: admin.php');
}

?>

<body>
    <?php
    $sql = "SELECT * FROM bookingtable";
    $bookingsNo = mysqli_num_rows(mysqli_query($link, $sql));
    $commingmoviesNo = mysqli_num_rows(mysqli_query($link, "SELECT * FROM commingtable"));
    $moviesNo = mysqli_num_rows(mysqli_query($link, "SELECT * FROM movietable"));
    $userNo = mysqli_num_rows(mysqli_query($link, "SELECT * FROM users"));
    ?>
        <?php include('mainheader.php'); ?>
    <?php include('header.php'); ?>

    <div class="admin-container">

        <?php include('sidebar.php'); ?>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">
                <div class="admin-section-panel admin-section-stats">
                    <div class="admin-section-stats-panel">
                        <i class="fa fa-ticket-alt" style="background-color: #cf4545"></i>
                        <h2 style="color: #cf4545"><?php echo $bookingsNo ?></h2>
                        <h3>Bookings</h3>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                        <h2 style="color: #4547cf"><?php echo $moviesNo ?></h2>
                        <h3>Movies</h3>
                    </div>
                    <div class="admin-section-stats-panel">
                        <i class="fas fa-users" style="background-color: #000000"></i>
                        <!--<i class="fas fa-ticket-alt"></i>-->
                        <h2 style="color: #bb3c95"><?php echo $userNo ?></h2>
                        <h3>Users</h3>
                    </div>
                    <div class="admin-section-stats-panel" style="border: none">
                    <i class="fas fa-film" style="background-color:tomato"></i>
                        <h2 style="color: #3cbb6c"><?php echo $commingmoviesNo ?></h2>
                        <h3>UpComming Movies</h3>
                    </div>
                </div>
                <div class="admin-section-panel admin-section-panel1">
                    <div class="admin-panel-section-header">
                        <h2>Recent Bookings</h2>
                        <i class="fas fa-ticket-alt" style="background-color: #cf4545"></i>
</div  >               
<div>
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
                                    <td><button type="submit" type="button" class="btn btn-outline-danger"><?php echo  "<a href='deleteBooking.php?id=" . $row['b_id'] . "' >Delete</a>"; ?></button> 
                                   
                                </tr>

                            <?php }
                            ?>
                        </tbody>

                    </table>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="../scripts/jquery-3.3.1.min.js "></script>
    <script src="../scripts/owl.carousel.min.js "></script>
    <script src="../scripts/script.js "></script>
</body>

</html>
