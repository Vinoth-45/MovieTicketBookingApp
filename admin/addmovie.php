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
                        <h2>Movies</h2>
                       <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>
                   

                      <form action="" method="POST" enctype="multipart/form-data">
                        
                          <label for=""> Movie name </label>
                          <input type="text" name="movie_name" id="" placeholder="Enter Movie name"  required>

                          
                         
                          <label for=""> Movie Genres </label>
                          <input type="text" name="movie_genre" id="" placeholder="Enter Movie Genres" required >
                          <label for=""> Movie Duration </label>
                          <input type="number" name="movie_duration" id="" placeholder="Enter Movie duration in minutes" >

                          
                          <label for=""> Actors </label>
                          <input type="text" name="movie_actors" id="" placeholder="Enter Movie actors" required >

                          
                          <label for=""> Director </label>
                          <input type="text" name="movie_dir" id="" placeholder="Enter Movie director" required >

                          
                          <label for=""> Release date </label>
                          <input type="date" name="movie_rdate" id="" placeholder="Enter release date" required >
                         

                         
                              
                             <label for=""> <h3>Price</h3> </label>
                         
                         
                          <label for=""> Fist class </label>
                          <input type="number" name="movie_fclass" id="" placeholder="Enter amount" required >

                         
                        
                        
                          <label for=""> Second class</label>
                          <input type="number" name="movie_sclass" id="" placeholder="Enter amount" required >

                         
                          
                          <label for=""> Third class </label>
                          <input type="number" name="movie_tclass" id="" placeholder="Enter amount" required >

                          <label for=""> Trailer URl </label>
                          <input type="text" name="movie_turl" id="" placeholder="Enter Trailer URL" required >

                        
                          <label for=""> Movie Poster </label>
                          <input type="file" name="image" >

                        
                          
                          <input type="submit" name="submit" value="Add Movie" style="background-color:gray;" required >

                      </form>
                
                        <?php

                            //CHeck whether the Submit Button is Clicked or Not
                if(isset($_POST['submit']))
                     {
                              $title = $_POST['movie_name'];
                              $genre = $_POST['movie_genre'];
                              $duration = $_POST['movie_duration'];
                              $reldate = $_POST['movie_rdate'];
                              $director = $_POST['movie_dir'];
                              $actors = $_POST['movie_actors'];
                              $mainhall = $_POST['movie_fclass'];
                              $viphall = $_POST['movie_sclass'];
                              $privatehall = $_POST['movie_tclass'];
                              $trailerurl = $_POST['movie_turl'];

                              $movieimage = $_FILES['image']['name'];
                              $movietempimage = $_FILES['image']['tmp_name'];


                              move_uploaded_file($movietempimage, "../images/uploadedimage/$movieimage");

                             
                              $sql = "INSERT INTO movietable SET
                              m_img='$movieimage',
                              m_name= '$title',
                              m_genre = '$genre',
                              m_duration = '$duration',
                              m_rdate = '$reldate',
                             
                              
                              m_dir = '$director',
                              movieactors = '$actors',
                              mvideo_url ='$trailerurl'
                              ";
                             /* $sql2 = "INSERT INTO movietable SET
                              mvideo_url ='$trailerurl'

                              ";*/
                              
                              $addmovieQuery = mysqli_query ($link , $sql);
                              
                              if ($addmovieQuery) {

                                echo "<b>Inserted successfully! </b>";
                                                            }
                                                            else{
                                                                echo "error".$link->error;
                                                            }
                                                          /*  $addmovieQuery2 = mysqli_query ($link , $sql2);

                            */
                     }
                    
                    

                        ?>

                    </div>
                </div>

                <div class="admin-section-panel admin-section-panel2">
                    <div class="admin-panel-section-header">
                        <h2>Recent Movies</h2>
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

                            $select = "SELECT * FROM `movietable`";
                            $run = mysqli_query($link, $select);
                            while ($row = mysqli_fetch_array($run)) {
                                $ID = $row['m_id'];
                                $title = $row['m_name'];
                                $genere = $row['m_genre'];
                                $releasedate = $row['m_rdate'];
                                $movieactor = $row['m_dir'];
                            ?>
                                <tr align="center">
                                    <td><?php echo $ID; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $genere; ?></td>
                                    <td><?php echo $releasedate; ?></td>
                                    <td><?php echo $movieactor; ?></td>
                                    <!--<td><?php echo  "<a href='deletemovie.php?id=" . $row['m_id'] . "'>Delete</a>"; ?></td>-->
                                    <td><button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-light" style="text-decoration:none;"><?php echo  "<a  href='deletemovie.php?id=" . $row['m_id'] . "'>Delete</a>"; ?></button></td>
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
