<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/estilo.css" rel="stylesheet">
    <link href="Css/style.css" rel="stylesheet">
    <title>AutoCarWin</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
    integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/lux/bootstrap.min.css"
    integrity="sha384-9+PGKSqjRdkeAU7Eu4nkJU8RFaH8ace8HGXnkiKMP9I9Te0GJ4/km3L1Z8tXigpG" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="img/logoPag.jpg">
    <link rel="stylesheet" href="Css/estilo.css">
</head>
<?php include('inc/header.php');?>
<?php include('inc/nav.php');?>
<body>
    <div class="content">
        <div><h1 class="logo">Ponte en Contacto Con Nosotros</h1></div>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <form action="guardar.php" method="post">
                <p>
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">
                </p>
                <p>
                    <label for="email">Correo</label>
                    <input type="email" name="email">
                </p>
                <p>
                    <label for="phone">Numero Telefonico</label>
                    <input type="tel" name="phone">
                </p>
                <p class="block">
                    <label for="mensaje">Mensaje</label> 
                    <textarea name="mensaje" rows="3"></textarea>
                </p>
                <p class="block">
                    <input type="submit" value="enviar">
                </p>
            </form>
                </div>
                    <div class="contact-info">
                    <h4>Sobre Nosotros</h4>
                    <hr>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> AutoCarWin</li>
                        <li><i class="fas fa-phone"></i> Numero Telefonico</li>
                        <li><i class="fas fa-envelope-open-text"></i> Direccion Sede Central</li>
                    </ul>
                <hr>
            <p>Al momento de recibir tu solicitud, Nos pondremos en contacto lo antes posible con usted para resolver sus dudas.</p>
        <p>AutoCarWin@gmail.cl</p>
    </div>
    </div>
    <?php include('inc/footer.php'); ?>
    </div>
</body>
</html>