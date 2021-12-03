<?php  include '../includeuser/db.php' ?>
<?php include 'mainheader.php' ?>
  
    <?php include('header.php'); ?>

   <div class="admin-container">

        <?php include('sidebar.php'); ?>

<div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Users</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>ID</th>
                            <th>UserName</th>
                            
                            <th>Password</th>
                            <th>Created Time</th>
                        </tr>
                        <tbody>
                            <?php

                            $select = "SELECT * FROM `users`";
                            $run = mysqli_query($link, $select);
                            while ($row = mysqli_fetch_array($run)) {
                                $ID = $row['id'];
                                $title = $row['username'];
                                $genere = $row['password'];
                                $releasedate = $row['created_at'];
                                
                            ?>
                                <tr align="center">
                                    <td><?php echo $ID; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $genere; ?></td>
                                    <td><?php echo $releasedate; ?></td>
                                   
                                    <!--<td><?php echo  "<a href='removeuser.php?id=" . $row['id'] . "'>Remove</a>"; ?></td>-->
                                    <td><button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-light" style="text-decoration:none;"><?php echo  "<a  href='removeuser.php?id=" . $row['id'] . "'>Remove</a>"; ?></button></td>
                                </tr>
                            <?php }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
