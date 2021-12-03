<?php include 'includeuser/db.php';
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login2.php");
   exit;
}
?>

<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<head>

    <style>
        .moviedesc {
            line-height: 2rem;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            padding-top: 10px;
            color: white;
        }

        h3 {
            line-height: 2rem;
            font-family: 'Times New Roman', Times, serif;
            padding-top: 10px;
        }

        span {
            font-size: 1.5rem;
            color: orangered;
        }
        h3{
            color:white;

        }
    </style>
</head>

<body
    style="background-color:#012443; background-size:cover;overflow-x:hidden;background-repeat:no-repeat;height:100%; ">


    <div class="container" style="padding-top:20px;">
        <!--Grid row-->
        <div class="row align-items-start" style="padding-bottom:20px;">
            <!--Grid column-->






            <h3>Running Movies</h3>


            <?php
$today=date("Y-m-d");
$qry2=mysqli_query($link,"SELECT * from  movietable");
        
while($m=mysqli_fetch_array($qry2))
   {
    ?>

            <?php
        
        ?>
            <div class="col-4" style="padding-top: 10px;">
                <a href="aboutmovie.php?id=<?php echo $m['m_id'];?>"><img
                        style="width:300px;border-radius:20px 10px;height: 350px;"
                        src="images/uploadedimage/<?php echo $m['m_img'] ?>"> </a>


                <div class="moviedesc">
                    <a style="text-decoration: none;" href="aboutmovie.php?id=<?php echo $m['m_id'];?>">
                        <span> <?php echo $m['m_name'];?></a></span><br>
                    <b> Released Date : &nbsp;</b> <?php echo $m['m_rdate'];?></b><br>
                    <b> Actors :&nbsp;</b> <?php echo $m['movieactors'];?><br>
                    <b> Genre :&nbsp;</b><?php echo $m['m_genre'];?><br>

                    <!--<button class="bookbtn"> <a class="bookbtn-a" href="about.php"> Book </a> </button>
   -->

                </div>
            </div>

            <?php } ?>
        </div>

    </div>
    </div>

    <?php include 'footer.php' ?>
</body>