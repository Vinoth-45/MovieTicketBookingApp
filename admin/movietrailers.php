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
                        <h2>Movie Trailers</h2>
                       <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>

                     

                    

                      <form action="" method="POST" enctype="multipart/form-data">
                        
                          <label for=""> Movie name </label>
                          <input type="text" name="m_name" id="" placeholder="Enter Movie name"  required>

                          
                         
                          <label for=""> Movie Genres </label>
                          <input type="text" name="m_genre" id="" placeholder="Enter Movie genres" required >
                         
                          
                          <label for=""> Actors </label>
                          <input type="text" name="m_actors" id="" placeholder="Enter Movie actors" required >

                          
                          <label for=""> Director </label>
                          <input type="text" name="m_dir" id="" placeholder="Enter Movie director" required >

                         <label for=""> Trailer URL </label>
                          <input type="text" name="m_trailerurl" id="" placeholder="Enter Trailer URL" required >                         
   
                          <label for=""> Movie Poster </label>
                          <input type="file" name="image" >

                        
                          
                          <input type="submit" name="submit" value="Add Trailer" style="background-color:gray;" required >

                      </form>
                
                        <?php

                            //CHeck whether the Submit Button is Clicked or Not
                if(isset($_POST['submit']))
                     {
                              $title = $_POST['m_name'];
                              $genre = $_POST['m_genre'];
                              $trailerurl = $_POST['m_trailerurl'];
                             
                           
                              $director = $_POST['m_dir'];
                              $actors = $_POST['m_actors'];
                             
                              $movieimage = $_FILES['image']['name'];
                              $movietempimage = $_FILES['image']['tmp_name'];


                              move_uploaded_file($movietempimage, "../images/movietrailers/$movieimage");


                              $sql = "INSERT INTO trailertable SET
                              m_img='$movieimage',
                              m_name= '$title',
                              m_genre = '$genre',
                              m_actors = '$actors',
                              m_trailerurl = '$trailerurl'
                              
                             

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
                        <h2>Movies Trailers</h2>
                        <i class="fas fa-film" style="background-color: #4547cf"></i>
                    </div>

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Trailer ID</th>
                            <th>Movie_Title</th>
                            <th>Movie_Genre</th>
                            
                            <th>Actors</th>
                            <th>More</th>

                        </tr>
                        <tbody>
                            <?php

                            $select = "SELECT * FROM `trailertable`";
                            $run = mysqli_query($link, $select);
                            while ($row = mysqli_fetch_array($run)) {
                                $ID = $row['m_id'];
                                $title = $row['m_name'];
                                $genere = $row['m_genre'];
                                $moviedir = $row['m_actors'];

                            ?>
                                <tr >
                                    <td><?php echo $ID; ?></td>
                                    <td><?php echo $title; ?></td>
                                    <td><?php echo $genere; ?></td>
                              
                                    <td><?php echo $moviedir; ?></td>
                                    <!--<td><?php echo  "<a href='deletetrailer.php?id=" . $row['m_id'] . "'>Delete</a>"; ?></td>-->
                                    <td><button value="Book Now!" type="submit" onclick="" type="button" class="btn btn-light" style="text-decoration:none;"><?php echo  "<a  href='deletetrailer.php?id=" . $row['m_id'] . "'>Delete</a>"; ?></button></td>
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
