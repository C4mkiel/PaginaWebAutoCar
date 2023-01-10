<!DOCTYPE html>
<html>

<?php 
include('session_client.php'); ?> 
<head>
<link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
<link rel="stylesheet" href="assets/w3css/w3.css">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="assets/css/clientpage.css" />
</head>
<body>

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
                        <li> <a href="ingresarauto.php">Añadir vehiculo</a></li>
                        <li> <a href="enterdriver.php"> Añadir sucursal</a></li>
                        <li> <a href="clientview.php">Vista</a></li>
                    </ul>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a>
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
                        <a href="PaginaWeb.html">Inicio</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-user"></span> Bienvenido <?php echo $_SESSION['login_customer']; ?></a>
                    </li>
                    <li>
                        <a href="#">Historia</a>
                    </li>
                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a>
                    </li>
                </ul>
            </div>

            <?php
            }
                else  {
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
        <form role="form" action="enterdriver1.php" enctype="multipart/form-data" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Ingresar Sucursal </h3>

          <div class="form-group">
            <input type="text" class="form-control" id="sucursal_nombre" name="sucursal_nombre" placeholder="Ciudad" required autofocus="">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="sucursal_direccion" name="sucursal_direccion" placeholder="Direccion" required>
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="sucursal_contacto" name="sucursal_contacto" placeholder="Contacto" required>
          </div>
          <div class="form-group">
            <input name="uploadedimage" type="file">
          </div>
           <button type="submit" id="submit" name="submit" class="btn btn-success pull-right"> Ingresar Sucursal</button>    
        </form>
      </div>
    </div>


        <div class="col-md-12" style="float: none; margin: 0 auto;">
    <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Sucursales </h3>
<?php
$user_check=$_SESSION['login_client'];
$sql = "SELECT * FROM sucursal d WHERE d.client_username='$user_check' ORDER BY sucursal_nombre";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>

  <table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>     </th>
        <th> Nombre</th>
        <th> Sector </th>
        <th> Numero Telefonico </th>
      </tr>
    </thead>

    <?PHP
      //OUTPUT DATA OF EACH ROW
      while($row = mysqli_fetch_assoc($result)){
    ?>

  <tbody>
    <tr>
      <td> <span class="glyphicon glyphicon-menu-right"></span> </td>
      <td><?php echo $row["sucursal_nombre"]; ?></td>
      <td><?php echo $row["sucursal_direccion"]; ?></td>
      <td><?php echo $row["sucursal_contacto"]; ?></td>
    </tr>
  </tbody>
  <?php } ?>
  </table>
  </div>
    <br>
  <?php } else { ?>
  <h4><center>No hay sucursales Disponibles</center> </h4>
  <?php } ?>
        </form>
</div>        
        </div>
    </div>
</body>
<footer class="site-footer">
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <h5>© <?php echo date("Y"); ?> AutoCarWin</h5>
                </div>
            </div>
        </div>
    </footer>
</html>