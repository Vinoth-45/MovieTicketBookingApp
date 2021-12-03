    
    <h3>Upcomming Movies</h3>
    
       
    <?php
       $today=date("Y-m-d");
      $qry2=mysqli_query($link,"SELECT * from  commingtable");
      
        while($m=mysqli_fetch_array($qry2))
             {
              ?>
      
    <?php
      
      ?>

<img  style="width:300px; ;height:350px;border-radius:20px 10px;" src="images/upcommingmovies/<?php echo $m['m_img'] ?>">
  
    
        <div class="moviedesc">
                                   
                                 <span><?php echo $m['m_name'];?></span><br>
                                  <b> Release Date :&nbsp;</b> <?php echo $m['m_rdate'];?></><br>
                                  <b> Actors:&nbsp;</b> <?php echo $m['m_actors'];?><br>
                                  <b>  Genres :&nbsp;</b><?php echo $m['m_genre'];?><br>

                                  
                                   </div>
                                   <hr style="height:3px;width:300px;color:tomato">
                                  <?php } ?>

                                  

