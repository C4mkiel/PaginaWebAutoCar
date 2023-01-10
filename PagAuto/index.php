<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
    integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css"
    integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AutoCarWin </title>
    <link rel="stylesheet" href="Css/styleindex.css">
    <link rel="stylesheet" href="Css/estilo.css">
</head>

<?php include('inc/header.php');?>
<?php include('inc/nav.php');?>
<?php $brands =  [
1 => "Mitsubishi",
2 => "Toyota",
3 => "Nissan",
4 => "Volkswagen"
];
?>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/img/carousel/carrousel1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<section class="container mt-5 mb-5">
    <h1>Nuestras Marcas</h1>
    <hr>
    <div class="card-deck">
        <?php foreach ($brands as $key => $brand) {
        ?>
        <div class="card">
            <img src="public/img/brands/brand<?php echo $key ?>.png" class="img-container" alt="<?php echo $brand ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $brand ?></h5>
            </div>
        </div>
        <?php
        } ?>
    </div>
</section>

<section class="container mb-5">
    <h1>Por qué elegir AutoCarWin</h1>
    <hr>
    <div class="row">
        <div class="col-md-6 col-12">
            <p>AutoMuevo cuenta con una larga trayectoria en la especialización de arriendo de vehículos, ya que contamos con varias sedes a lo largo
             del país además de contar con un amplio stock de vehículos en nuestras sedes, la forma de trabajar de nosotros es simple, arriendas un
              vehículo, escoges el día, ubicación, hora y donde vas a querer retirar nuestro vehículo, si es en nuestras instalaciones o si necesitas que te lo vayamos 
              a dejar a una ubicación exacta, ya que queremos brindarle nuestra mayor confianza y factibilidad al cliente para que así este se
               sienta seguro de querer usar nuestros servicios.</p>
        </div>
        <div class="col-md-6 col-12">
            <img src="public/img/others/car1.png" alt="" class="img-fluid">
        </div>
    </div>
</section>

    
<div class="clearfix"></div>
    <footer id="footer">
        <p>&copy; desarrollado por Analistas Programadores</p>
        <p>Mas contenido informacion del sitio web</p>
    </footer>
    <!--Idea de formulario https://mitta.cl/rent-car/-->

</html>