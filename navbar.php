<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <style>

  </style>
</head>

<nav class="container-fluid p-3 text-white" style="margin-top:2px;background:transparent;">
  <div class="container-fluid">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <div class="">
        <a href="index.php"><img src="images/pvrlogo2.png" style="border-radius: 20px;" width="200px" height="100px"
            alt=""></a>

      </div>




      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
        style="font-size: x-large; font-family:'Times New Roman', Times, serif">

        <li><a href="index.php" class="nav-link px-2  text-white ">&nbsp; Home</a></li>

        <li><a href="movies.php" class="nav-link px-2 text-white">Movies</a></li>

        <li><a href="aboutdev.php" class="nav-link px-2 text-white">About</a></li>
      </ul>



      <!-- User Login Check-->
      <?php if (empty($_SESSION['username'])) { ?>
      <div class="text-end" style="padding-left:50px;">
        <button type="button" class="btn btn-primary btn-outline-warning me-2"><a href="login2.php"
            style="text-decoration: none;color:white">Login</a></button>
        <button type="button" class="btn btn-primary  btn-outline-warning me-2"><a href="registration2.php"
            style="text-decoration: none;color:white">Sign-up</a> </button>
      </div>
      <?php } ?>

      <?php if (!empty($_SESSION['username']))  { ?>

      <div class="text-end" style="padding-right:50px;">

        <table>
          <tr>
            <td>

              <span style="color:papayawhip;font-size:large;font-family:'Times New Roman', Times, serif "><i
                  class="bi bi-person-check"></i>
                &nbsp; Hi&nbsp;<?php echo ($_SESSION['username']) ?>! </span>

            </td>
            <td>

              <form method="post">


                <span>&nbsp; <button type="submit" name="logout" class="btn btn-outline-light "> Logout</button></span>

              </form>

            </td>
          </tr>
        </table>


      </div>
     



      <?php }  
      if (isset($_POST['logout']))
      {
         session_destroy();
         header("location:login2.php");
      }
      ?>



    </div>
  </div>
</nav>
<hr style="height:2px;width:100%;color:white ">





</div>