
<?php  include 'includeuser/db.php'   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        .moviedesc
        {
           line-height: 2rem;
           font-family: 'Times New Roman', Times, serif;
           font-size:20px;
           padding-top: 10px;
           color:white;
        }
        h3 {
            line-height: 2rem;
            font-family: 'Times New Roman', Times, serif;
            padding-top: 10px;
        }
        span
        {
            font-size: 1.5rem;
            color: orangered;
        }
        h3{
            color:white;
        }



        
    </style>
</head>
<body>
 
<div class="container-fluid" style="padding-top: 20px;">
<div class="container">
<div class="row">

        <div class="col-4">
        <?php include 'movietrailerbar.php' ?>
        </div>
     

        <div class="col-4">
        <?php include 'upcommingmoviebar.php' ?>

      
        </div>

       
        <div class="col-4">
        <?php include 'runningmoviesbar.php' ?>


        </div>
                       
 
    </div>
    </div>
    </div>
   

    
</body>
</html>