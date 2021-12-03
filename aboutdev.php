<?php  session_start(); 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location:login2.php");
   exit;
}
?>


<?php include 'header.php' ?>
<?php include 'includeuser/db.php' ?>
<?php include 'navbar.php' ?>
<body style="background-color:#012443; background-size:cover;overflow-x:hidden;background-repeat:no-repeat;height:100%; ">
    

<div class="container text-white ">
    <div class="col-12">
        <p style="font-family: 'Times New Roman', Times, serif;padding-left:20px;">
       <h3>ABOUT US</h3> 
PVR Ltd. is the market leader in terms of screen count in India. Since 1997, the brand has redefined the cinema industry and the way people watch movies in the country. The Company has, over the years, consistently added screens, both organically and inorganically, through strategic investments and acquisitions which includes ‘Cinemax Cinemas’ in November 2012, ‘DT Cinemas’ in May 2016 and ‘SPI Cinemas’ in August 2018 which added 138 screens, 32 screens and 76 screens respectively to our screen network. Currently, we operate 846 screens in 176 cinemas in 71 cities in India and Sri Lanka with an aggregate seating capacity of approximately 1.82 lakhs seats.

We offer a diversified cinema viewing experience through our formats, including ‘PVR Director’s Cut’, ‘PVR LUXE’, ‘PVR IMAX’, ‘PVR Superplex’, ‘PVR P[XL]’, ‘PVR Playhouse’, ‘PVR ECX’, ‘PVR Premiere’, ‘PVR ICON’, ‘PVR LUXE’, ‘PVR Cinemas’ and ‘PVR Utsav’, and pursuant to our acquisition and amalgamation of SPI Cinemas, ‘Escape’, ‘Sathyam’ and ‘Palazzo’. The Company exhibits diversified content to serve different regional customer segments across India.

We have a diversified revenue stream and generate revenues primarily from box office and non-box office which primarily includes revenue from Sale of Food and Beverages, advertisement income, convenience fees, and income from movie production/ distribution among others.
<br><br>
<h4>COMPANY STRENGTHS</h4>
<ul>
    <li>
    Movie exhibition industry leader in India

    </li>



    <li>Strategically located cinemas</li>
    <li>Diversified product offerings and premium guest experience</li>
    <li>Leadership across key operating metrics and robust financial position</li>
    <li>Experienced Promoters, Key Managerial Personnel and senior management team with established track record</li>
</ul> </p>
    </div>
</div>
<?php include 'footer.php' ?>
</body>


