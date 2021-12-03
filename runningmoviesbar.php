
    <h3 style="color: white;">Films in Theatre</h3>
    
       
    <?php
$today=date("Y-m-d");
$qry2=mysqli_query($link,"SELECT * from  movietable");
        
while($m=mysqli_fetch_array($qry2))
   {
    ?>

    <?php
        
        ?>
         <a href="aboutmovie.php?id=<?php echo $m['m_id'];?>"><img style="width:300px;border-radius:20px 10px;height: 350px;" src="images/uploadedimage/<?php echo $m['m_img'] ?>"> </a>

    
          <div class="moviedesc" style="color:white">
                         <a style="text-decoration: none;" href="aboutmovie.php?id=<?php echo $m['m_id'];?>">
                         <span> <?php echo $m['m_name'];?></a></span><br>
                        <b> Released Date : &nbsp;</b> <?php echo $m['m_rdate'];?></b><br>
                        <b> Actors :&nbsp;</b> <?php echo $m['movieactors'];?><br>
                        <b>  Genres :&nbsp;</b><?php echo $m['m_genre'];?><br>
                        
                          <!--<button class="bookbtn"> <a class="bookbtn-a" href="about.php"> Book </a> </button>
   -->

                        </div>
                        <hr style="height:3px;width:300px;color:tomato">
                        <?php } ?>

