<?php 
session_start(); 
if (empty($_SESSION['tipo'])) {
    
} else {
    header("location: main.php");
}
?>       
<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="UTF-8">        
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all"><!--style_sheet-->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all"><!--font_awesome_icons-->
<!--web_fonts-->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <title>Inicio de sesión</title>
    <!--CSS-->
    <link rel="stylesheet" href="assets/css/bootstrap-yeti.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <!--Javascript-->
    <script type="text/javascript" src="assets/js/jquery.js"></script>        
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/loginjs.js"></script>
</head>
<body>
  <div class="form">
<h1 style="color:white">Bienvenido</h1 >
    <div class="form-content">
        <form class="form-signin" id="formlogin">
            <div class="form-info">
                <h2>Login</h2>
            </div>
            <div class="errores" id="mensaje1">
                            <p class="text-danger">Introduce tu usuario.</p>
                        </div>
            <div class="email-w3l">

                <span class="i1"><i class="fa fa-user" aria-hidden="true"></i></span>
                <input class="email" type="text"  name="usu" id="itFolio" placeholder="username" required="">
            </div>
            <div class="pass-w3l">
            <!---728x90--->
             <div class="errores" id="mensaje2">
                            <p class="text-danger">Introduce tu contraeña.</p>
                        </div>
            <span class="i2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
                <input class="pass" type="password" name="pwd" id="itPassword" placeholder="Password" required="">
            </div>
            
            <div class="submit-agileits">
                <input class="login" type="submit"  ">
            </div>
            
        </form>
    </div>
</div>
    <div class="nav">
        <div class="row-fluid" id="mensaje"></div>
    </div>
    <!--====  End of Section comment 

    
<div class="row">
    <div class="row-fluid">            
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3" style="margin-top: 100px;" >
            <div class="panel-login">
                <div class="panel-body" id="principal" >                                                                                                    
                    <form class="form-signin" id="formlogin">
                        <div class="col-md-3">
                            <img src="assets/img/informe.png" class="img-responsive"  >
                        </div>
                        <div class="col-md-9">
                            <h3 class="color-light">Bienvenido</h3>
                            <p class="color-light">Por favor ingresa tus credenciales para ingresar.</p> 
                         </div> 
                         <br>
                         <div class="col-md-12">
                        <br>                                                                  
                        <div class="errores" id="mensaje1">
                            <p class="text-danger">Introduce tu usuario.</p>
                        </div>

                        <div class="input-group" id="campo1">
                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="usu" id="itFolio" class="form-control form-login btn-block" placeholder="Usuario" autofocus />
                        </div>
                        <br>
                        <div class="errores" id="mensaje2">
                            <p class="text-danger">Introduce tu contraeña.</p>
                        </div>
                        <div class="input-group" id="campo2">
                            <span class="input-group-addon"><i class="fa fa-lock " aria-hidden="true"></i></span>
                            <input type="password" name="pwd" id="itPassword" class="form-control form-login btn-block" placeholder="Contraseña" />
                        </div>
                        <br>
                        <div class="col-lg-4 col-lg-offset-8">
                            <div class="form-group" id="campoapaterno">
                                 <button type="submit" class="btn btn-primary btn-block">Ingresar</button> 
                            </div>
                        </div>   
                        </div>                                                                         
                    </form>                    
                </div>                
            </div>
        </div>
    </div>
</div>
     ====-->


</body>
</html>
