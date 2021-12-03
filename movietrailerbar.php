     <h3>Movie Trailers</h3>


     <?php
       $today=date("Y-m-d");
      $qry2=mysqli_query($link,"SELECT * from  trailertable");
      
        while($m=mysqli_fetch_array($qry2))
             {
              ?>

     <?php
      
      ?>
     <a href="<?php echo $m['m_trailerurl']; ?>" target="_blank"><img
         style="width:300px;height:350px; border-radius:20px 10px;"
         src="images/movietrailers/<?php echo $m['m_img'] ?>"></a>
     <div class="moviedesc"  >
       <span><?php echo $m['m_name'];?></span><br>
       <b> Actors :&nbsp;</b> <?php echo $m['m_actors'];?><br>
       <b> Genres :&nbsp;</b><?php echo $m['m_genre'];?><br>
       <b> Trailer :&nbsp;</b>Available<br>


     </div>
     <hr style="height:3px;width:300px;color:tomato">
     <?php } ?>