<!DOCTYPE html>
<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.jpg">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
    integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css"
    integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="img/logoPag.jpg">
    <link rel="stylesheet" href="Css/styleindex.css">
    <link rel="stylesheet" href="Css/estilo.css">

    <title>Pagina arriendo de autos</title>
</head>
<?php include('inc/header.php');?>
<?php include('inc/nav.php');?>
<div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Vehiculos Disponibles</h3>
<br>
    <section class="menu-content">
        <?php   
        $sql1 = "SELECT * FROM cars WHERE car_availability='yes'";
        $result1 = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result1) > 0) {
            while($row1 = mysqli_fetch_assoc($result1)){
                $car_id = $row1["car_id"];
                $car_name = $row1["car_name"];
                $ac_price = $row1["ac_price"];
                $ac_price_per_day = $row1["ac_price_per_day"];
                $non_ac_price = $row1["non_ac_price"];
                $non_ac_price_per_day = $row1["non_ac_price_per_day"];
                $car_img = $row1["car_img"];
               
            ?>
        <a href="booking.php?id=<?php echo($car_id) ?>">
        <div class="sub-menu">
        <img class="card-img-top" src="<?php echo $car_img; ?>" alt="Card image cap">
        <h5><b> <?php echo $car_name; ?> </b></h5>
        <h6> <?php echo ("Modelo: " . $car_name ); ?></h6>
        <h6> <?php echo ("Kilometraje:" .$ac_price_per_day)?> </h6>
        <h6> <?php echo ("Color:  " .$non_ac_price  ); ?></h6>
        <h6> <?php echo ("Precio Por Dia: " .$non_ac_price_per_day );?></h6>
        </div> 
        </a>
        <?php }}
            else {
                ?>
<h1> No hay Autos Disponibles </h1>
                <?php
            }
            ?>                                   
        </section>
                    
    </div>

<?php include('inc/footer.php'); ?>