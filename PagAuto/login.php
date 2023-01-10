<?php
include('login_client.php');
if(isset($_SESSION['login_client.php'])){
    header("location: ingresarauto.php");
}
?>
<!DOCTYPE html>
    <html>
    <head>
    <title> Login Admin </title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/clientlogin.css">
</head>
<body>
<div class="container">
            <div class="jumbotron">
                <h1 class="text-center">Administracion AutoCarWin </span>
                </h1>
                <br>
                <p class="text-center">Ingrese Usuario y contraseña</p>
            </div>
</div>
    <div class="container" style="margin-top: -2%; margin-bottom: 2%;">
            <div class="col-md-5 col-md-offset-4">
                <label style="margin-left: 5px;color: red;"><span> <?php echo $error;  ?> </span></label>
                <div class="panel panel-primary">
                    <div class="panel-heading"> Administracion </div>
                    <div class="panel-body">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="client_username"><span class="text-danger" style="margin-right: 5px;">*</span> Usuario </label>
                                    <div class="input-group">
                                        <input class="form-control" id="client_username" type="text" name="client_username" placeholder="usuario" required="" autofocus="">
                                        <span class="input-group-btn">
                                            <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label for="client_password"><span class="text-danger" style="margin-right: 5px;">*</span> Contraseña </label>
                                    <div class="input-group">
                                        <input class="form-control" id="client_password" type="password" name="client_password" placeholder="**********" required="">
                                        <span class="input-group-btn">
                                            <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-4">
                                    <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Ingresar</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>
