<?php
include "../includeuser/db.php";

// Check user login or not
/*if (!isset($_SESSION['uname'])) {
    header('Location: login.php');
}

// logout
if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: login.php');
}*/
?>
<!DOCTYPE html>
<html lang="en">



<body>
    <?php include 'mainheader.php' ?>
  
    <?php include('header.php'); ?>

   <div class="admin-container">

        <?php include('sidebar.php'); ?>
        <div class="admin-section admin-section2">
            <div class="admin-section-column">


                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>UpComming Movies</h2>
                       <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>

                     

                    

                      <form action="" method="POST" enctype="multipart/form-data">
                        
                          <label for=""> Movie name </label>
                          <input type="text" name="m_name" id="" placeholder="Enter Movie name"  required>

                          
                         
                          <label for=""> Movie Genres </label>
                          <input type="text" name="m_genre" id="" placeholder="Enter Movie genres" required >
                          <label for=""> Movie Duration </label>
                          <input type="number" name="m_duration" id="" placeholder="Enter Movie duration in minutes" >

                          
                          <label for=""> Actors </label>
                          <input type="text" name="m_actors" id="" placeholder="Enter Movie actors" required >

                          
                          <label for=""> Director </label>
                          <input type="text" name="m_dir" id="" placeholder="Enter Movie director" required >

                          
                          <label for=""> Release date </label>
                          <input type="date" name="m_rdate" id="" placeholder="Enter release date" required >
                         

                         
   
                          <label for=""> Movie Poster </label>
                          <input type="file" name="image" >

                        
                          
                          <input type="submit" name="submit" value="Add Movie" style="background-color:gray;" required >

                      </form>
                
                        <?php

                            //CHeck whether the Submit Button is Clicked or Not
                if(isset($_POST['submit']))
                     {
                              $title = $_POST['m_name'];
                              $genre = $_POST['m_genre'];
                              $duration = $_POST['m_duration'];
                              $reldate = $_POST['m_rdate'];
                              $director = $_POST['m_dir'];
                              $actors = $_POST['m_actors'];
                             
                              $movieimage = $_FILES['image']['name'];
                              $movietempimage = $_FILES['image']['tmp_name'];


                              move_uploaded_file($movietempimage, "../images/upcommingmovies/$movieimage");


                              $sql = "INSERT INTO commingtable SET
                              m_img='$movieimage',
                              m_name= '$title',
                              m_genre = '$genre',
                              m_duration = '$duration',
                              m_rdate = '$reldate',

                              m_dir = '$director',

                              m_actors = '$actors'
                            
                              ";

                              $addmovieQuery = mysqli_query ($link , $sql);
                              if (!$addmovieQuery) {

                                 echo "Not inserted" .$link->error;
                              }

                     }

                        ?>

                    </div>
                </div>

                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>UpComming Movies</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>MovieID</th>
                            <th>MovieTitle</th>
                            <th>Movie_Genre</th>
                            <th>Release_date</th>
                            <th>Director</th>
                            <th>More</th>

                        </tr>
                        <tbody>
                            <?php

                            $select = "SELECT * FROM `commingtable`";
                            $run = mysqli_query($link, $select);
                            while ($row = mysqli_fetch_array($run)) {
                                $ID = $row['m_id'];
                                $title = $row['m_name'];
                                $genere = $row['m_genre'];
                                $releasedate = $row['m_rdate'];
                                $movieactor = $row['m_actors'];
                            ?>
                                <tr align="center">
                                    <td><?php echo $ID; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $genere; ?></td>
                                    <td><?php echo $releasedate; ?></td>
                                    <td><?php echo $movieactor; ?></td>
                                    <!--<td><?php echo  "<a href='deletecommingmovies.php?id=" . $row['m_id'] . "'>Delete</a>"; ?></td>-->
                                    <td><button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-light" style="text-decoration:none;"><?php echo  "<a  href='deletecommingmovies.php?id=" . $row['m_id'] . "'>Delete</a>"; ?></button></td>
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
