<!DOCTYPE html>
<html>
<?php 
 include('session_customer.php');
if(!isset($_SESSION['login_customer'])){
    session_destroy();
    header("location: customerlogin.php");
}
?> 
<title>Retiro Vehiculo </title>
<head>
    <script type="text/javascript" src="assets/ajs/angular.min.js"> </script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>  
  <script type="text/javascript" src="assets/js/custom.js"></script> 
 <link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body ng-app=""> 


      <!-- Navigation -->
     <!-- Navigation -->
     <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   AutoCarWin </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?> 
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Bienvenido <?php echo $_SESSION['login_client']; ?></a>
                    </li>
                    <li>
                    <ul class="nav navbar-nav navbar-right">
                        <li> <a href="entercar.php">Añadir vehiculo</a></li>
                        <li> <a href="enterdriver.php">Añadir Manejador</a></li>
                        <li> <a href="clientview.php">Vista</a></li>

                    </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
            
            <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Bienvenido <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <ul class="nav navbar-nav">
                        <li> <a href="prereturncar.php">Retirar ahora</a></li>
                        <li> <a href="mybookings.php"> Mi reserva</a></li>
                    </ul>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else {
            ?>

            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a href="clientlogin.php">Empleado</a>
                    </li>
                    <li>
                        <a href="customerlogin.php">Cliente</a>
                    </li>
                    <li>
                        <a href="contacto.html"> Contacto </a>
                    </li>
                </ul>
            </div>
                <?php   }
                ?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
<div class="container" style="margin-top: 65px;" >
    <div class="col-md-7" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form role="form" action="bookingconfirm.php" method="POST">
        <br style="clear: both">
          <br>

        <?php
        $car_id = $_GET["id"];
        $sql1 = "SELECT * FROM cars WHERE car_id = '$car_id'";
        $result1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($result1)){
            while($row1 = mysqli_fetch_assoc($result1)){
                $car_name = $row1["car_name"];
                $car_nameplate = $row1["car_nameplate"];
                $ac_price = $row1["ac_price"];
                $non_ac_price = $row1["non_ac_price"];
                $ac_price_per_day = $row1["ac_price_per_day"];
                $non_ac_price_per_day = $row1["non_ac_price_per_day"];
            }
        }

        ?>

          <!-- <div class="form-group"> -->
              <h5> Seleccion de vehiculo:&nbsp;  <b><?php echo($car_name);?></b></h5>
         <!-- </div> -->
         
          <!-- <div class="form-group"> -->
            <h5> Numero placa:&nbsp;<b> <?php echo($car_nameplate);?></b></h5>
          <!-- </div>      -->
        <!-- <div class="form-group"> -->
        <?php $today = date("Y-m-d") ?>
          <label><h5>Fecha inicio:</h5></label>
            <input type="date" name="rent_start_date" min="<?php echo($today);?>" required="">
            &nbsp; 
          <label><h5>Fecha termino:</h5></label>
          <input type="date" name="rent_end_date" min="<?php echo($today);?>" required="">
        <!-- </div>      -->
        
        <h5> Elegir Retiro:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="ac" ng-model="myVar"> <b>Sucursal </b>&nbsp;
            <input onclick="reveal()" type="radio" name="radio" value="non_ac" ng-model="myVar"><b>Domicilio </b>
        <div ng-switch="myVar"> 
        <div ng-switch-default>
                    <!-- <div class="form-group"> -->
                <h5>Tarifa <h5>    
                <!-- </div>    -->
                     </div>
                    <div ng-switch-when="ac">
                    <!-- <div class="form-group"> -->
                <h5>Año y Kilometraje: <b><?php echo("Año: " . $ac_price . ", Y  " . $ac_price_per_day . " : Kilometraje");?></b><h5>    
                <!-- </div>    -->
                     </div>
                     <div ng-switch-when="non_ac">
                     <!-- <div class="form-group"> -->
                <h5>Color y Precio dia: <b><?php echo("Color: " . $non_ac_price . ", Y " . $non_ac_price_per_day . " : Pesos por dia");?></b><h5>    
                <!-- </div>   -->
                     </div>
        </div>

         <h5> Precio por:  &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="km"><b> Por KM</b> &nbsp;
            <input onclick="reveal()" type="radio" name="radio1" value="days"><b> Por Dia</b>

            <br><br>
                <!-- <form class="form-group"> -->
                Seleccion sucursal: &nbsp;
                <select name="sucursal_id_from_dropdown" ng-model="myVar1">
                        <?php
                        $sql2 = "SELECT * FROM sucursal AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        $result2 = mysqli_query($conn, $sql2);

                        if(mysqli_num_rows($result2) > 0){
                            while($row2 = mysqli_fetch_assoc($result2)){
                                $sucursal_id = $row2["sucursal_id"];
                                $sucursal_nombre = $row2["sucursal_nombre"];
                                $sucursal_direccion = $row2["sucursal_direccion"];
                                $sucursal_contacto = $row2["sucursal_contacto"];
                    ?>
                    <option value="<?php echo($sucursal_id); ?>"><?php echo($sucursal_nombre); ?>
                    <?php }} 
                    else{
                        ?>
                    Lo siento! no se encuentra disponible en ninguna sucursal.
                        <?php
                    }
                    ?>
                </select>
                <!-- </form> -->
                <div ng-switch="myVar1">
                <?php
                        $sql3 = "SELECT * FROM sucursal d  AND d.client_username IN (SELECT cc.client_username FROM clientcars cc WHERE cc.car_id = '$car_id')";
                        $result3 = mysqli_query($conn, $sql3);

                        if(mysqli_num_rows($result3) > 0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                                $sucursal_id = $row3["sucursal_id"];
                                $sucursal_nombre = $row3["sucursal_nombre"];
                                $sucursal_direccion = $row3["sucursal_direccion"];
                                $sucursal_contacto = $row3["sucursal_contacto"];
                ?>
                <div ng-switch-when="<?php echo($sucursal_id); ?>">
                    <h5>Nombre sucursal:&nbsp; <b><?php echo($sucursal_nombre); ?></b></h5>
                    <p>Sector:&nbsp; <b><?php echo($sucursal_direccion); ?></b> </p>
                    <p>Contacto:&nbsp; <b><?php echo($sucursal_contacto); ?></b> </p>
                </div>
                <?php }} ?>
                </div>
                <input type="hidden" name="hidden_carid" value="<?php echo $car_id; ?>">
           <input type="submit"name="submit" value="Rentar ahora" class="btn btn-warning pull-right">     
        </form>
        
      </div>
      <div class="col-md-12" style="float: none; margin: 0 auto; text-align: center;">
            <h6><strong>Nota:</strong> Renta de vehiculos <span class="text-danger">AutoCarWin</span> Cualquier duda contactarse con el administrador</h6>
        </div>
    </div>

</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?>AutoCarWin</h5>
                </div>
            </div>
        </div>
    </footer>
</html>