
<?php  include './includeuser/db.php' ?>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<div class="listview_1_of_3 images_1_of_3">
    <h2 style="color:#555;">Films in Theaters</h2>

    <?php
    $today=date("Y-m-d");
    $query = "SELECT * FROM movietable limit 5";
    $result = mysqli_query($link , $query);
    if($result)
    {
    while($m=mysqli_fetch_array($result))
    {
        ?>
        <div class="content-left">
            <div class="listimg listimg_1_of_2">
                <?php

                ?>
                <a href="#"><img src="<?php echo $m['movieImg'];?>"></a>
            </div>
            <div class="text list_1_of_2">
                <div class="extra-wrap1">
                    <a href="about.php?id=<?php echo $m['movieID'];?>" class="link4" style="text-decoration:none; font-size:18px;"><?php echo $m['movieTitle'];?></a><br>
                    <span class="data">Release Date: <?php echo $m['movieRelDate'];?></span><br>
                    Cast: <Span class="data"><?php echo $m['movieActors'];?></span><br>
                    Description: <span" class="color2" style="text-decoration:none;"><?php echo $m['movieGenre'];?></span><br>
                </div>
            </div>

            <div class="clear"></div>
        </div>
        <?php
    }
    }
    ?>










</div>
<div class="clear"></div>

