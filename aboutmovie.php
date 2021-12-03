<?php include 'includeuser/db.php'; 
session_start();

?>


<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .moviedesc {
            line-height: 2rem;
            font-family: 'Times New Roman', Times, serif;
            font-size: 20px;
            padding-top: 10px;
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
        td,th{
           
            color: white;
        }
        input
        {
            height: 30px;
        }
        h5{
            color:white
        }
    </style>

</head>

<body style="background-color:#012443;font-family:'Times New Roman', Times, serif ">


    <?php include 'header.php' ?>
    <?php include 'navbar.php' ?>

    <?php
 $qry2=mysqli_query($link,"select * from movietable where m_id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry2);

	?>
    <div class="container p-5">

        <div class="row">
            <div class="col-9" style="border:lightslategrey;">

                <h3 style="color:tomato;"><?php echo $movie['m_name']; ?></h3>

                <img style="width:300px; ;height: 350px;border-radius:20px 10px;  "
                    src="images/uploadedimage/<?php echo $movie['m_img'] ?>">
                <div style="padding-top: 10px;color:white ">
                    <p class="p-link" style="font-size:large"><b>Actors : </b><?php echo $movie['movieactors']; ?></p>
                    <p class="p-link" style="font-size:large"><b>Director : </b><?php echo $movie['m_dir']; ?></p>


                    <button class="btn btn-success"><a href="<?php echo $movie['mvideo_url'];?>"
                            style="text-decoration: none; color:antiquewhite;font-size:large " target="_blank">Watch
                            Trailer</a></button>
                    <br>
                    <div style="padding-left:230px; padding-top:20px;">

                    </div>
                </div>



                <?php
                                        $date = date("d-m-y");
                                        ?>
                <div style="padding-top: 10px; ">

                    <form action="" method="post" >
                        <table class="table table-borderless" style="box-shadow:black;width:500px;">
                            <tbody>
                                <tr>
                                    <td>
                                        Email-ID :
                                    </td>
                                    <td>
                                        <input type="email" name="email" style="width:200px;"
                                            placeholder="Enter valid email.." required>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Date :
                                    </td>
                                    <td>
                                        <input type="text" name="date" style="width:200px;"
                                            value="<?php echo ($date); ?>" id="" readonly>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Show Time :
                                    </td>
                                    <td>
                                        <select name="time" style="width:200px;" required>

                                            <option value="10 PM">10 AM</option>
                                            <option value="1 PM">1 PM</option>
                                            <option value="7 PM">7 PM</option>
                                        </select>


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Class Type :
                                    </td>
                                    <td>
                                        <select name="class" style="width:200px;" required>

                                            <option id="fclass" value="fclass">First Class / Rs.300</option>
                                            <option id="sclass" value="sclass">Second Class / Rs.200</option>
                                            <option id="tclass" value="tclass">Third Class / Rs.100 </option>
                                        </select>


                                    </td>
                                </tr>
                                <tr>
                                    <td>Number of Seats</td>
                                    <td><input type="number" style="width:200px;" value="1" name="numseats"
                                            id="numofseats">
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="btn btn-danger" style="width:200px; font-size:large; "
                                            name="submit"> Book
                                        </button> </td>
                                </tr>

                            </tbody>
                        </table>
                    </form>
                </div>
                <?php 
                                    if(isset($_POST['submit']))
                                     {
                                         
                                       $email = $_POST['email']; 
                                       $date = $_POST['date'];
                                       $time = $_POST['time'];
                                       $class = $_POST['class'];
                                       $numseats = $_POST['numseats'];
                                       if ($class != 'sclass' && $class != 'tclass' ) 
                                       {
                                           $amount = 300 * $numseats;
                                           $class = "First Class";
                                       }
                                       elseif ($class != 'fclass' && $class != 'tclass' ) 
                                        {
                                            $amount = 200 * $numseats;
                                            $class = "Second Class";
                                       }
                                       else 
                                        {
                                            $amount = 100 * $numseats;
                                            $class = "Third Class";


                                            }

                                         
                                       ?>
                <div style="padding-top: 30px;">
                    <h5>Confirm Details!</h5>


                    <form action="" method="post">
                        <table class="table table-borderless" style="box-shadow:black;width:500px;">
                            <tbody>
                                <tr>
                                    <td>
                                        Movie name :
                                    </td>
                                    <td>
                                        <input type="text" readonly name="finalmname"
                                            value="<?php echo $movie['m_name']; ?>" id="">
                                    </td>

                                </tr>
                                <td>
                                    Your E-mail :
                                </td>
                                <td>
                                    <input type="text" readonly name="finalemail" value="<?php echo $email; ?>" id="">
                                </td>

                                </tr>
                                <tr>
                                    <td>
                                        Date :
                                    </td>
                                    <td>
                                        <input type="text" readonly name="finaldate" value="<?php echo ($date); ?>"
                                            id="">
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        Show Time :
                                    </td>
                                    <td>
                                        <input type="text" readonly name="finaltime" value="<?php echo ($time); ?>">


                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Class Type :
                                    </td>
                                    <td>
                                        <input type="text" readonly name="finalclass" value="<?php echo ($class); ?>">

                                    </td>
                                </tr>
                                <tr>
                                    <td>Number of Seats</td>
                                    <td><input type="number" readonly value="<?php echo ($numseats); ?>"
                                            name="finalnumseats">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Amount :</td>
                                    <td><input type="number" readonly value="<?php echo ($amount); ?>"
                                            name="finalamount">
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><button class="btn btn-primary" style="width:200px; font-size:large; "
                                            name="finalsubmit">Confirm Booking
                                        </button> </td>
                                </tr>

                            </tbody>
                        </table>
                    </form>
                </div>

                <?php } ?>

                <?php 
                                     
                                     if (isset($_POST['finalsubmit']))
                                      {
                                        $date = $_POST['finaldate'];
                                        $time = $_POST['finaltime'];
                                        $class = $_POST['finalclass'];
                                        $numseats= $_POST['finalnumseats'];
                                        $amount= $_POST['finalamount'];
                                        $moviename = $_POST['finalmname'];
                                        $email = $_POST['finalemail'];

                                        $username = $_SESSION['username'];

                                        $sql = "INSERT INTO bookingtable SET 
                                                b_date = '$date',
                                                b_stime = '$time',
                                                b_class = '$class',
                                                b_numseats = '$numseats',
                                                b_amount = '$amount',
                                                b_username = '$username',
                                                b_movie_name = '$moviename',
                                                user_email  = '$email'
                                                ";


                                       $addbookingQuery = mysqli_query($link , $sql);

                                       if (!$addbookingQuery)
                                        {
                                            echo "Something went wrong!".$link->error;

                                       }
                                       else
                                       {
                                           echo '<script> alert("Booking Successfull!") </script>';
                                           

                                       }
                                     }

                                    ?>



            </div>

            <div class="col-3">

                <?php include 'runningmoviesbar.php' ?>
            </div>


        </div>
    </div>
    <?php include 'footer.php' ?>
</body>