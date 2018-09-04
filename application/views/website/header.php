<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>plantilla/website/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
    <title>Animax</title>
</head>
<body>
  <header>
<nav class="navbar navbar-expand-sm">
    <div class="container-fluid">
      <a href="#"><img src="<?=base_url();?>plantilla/website/img/logo.png"></a>
           <button  id="boton-menu" class="btn" type="button" onclick="ocultar()"/>
            <i class="fas fa-bars" style="color:#000;"></i>
        </button>
<div class=" mi-menu" id="cNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Maestro</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Audiofrecuencia</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Game Center</a>
    <li class="nav-item">
      <a class="nav-link" href="#"><i class="fas fa-mobile fa-lg"></i>Descargar App</a>
    </li>
  </ul>
</div>
      <button onclick="oculta()" class="font-s btn"><i class="fas fa-search"></i></button>
      <div id="buscar" class="ocultar">
        <form class="form-inline" action="/action_page.php">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-success" type="submit">Buscar</button>
        </form>
    </div>
</div>
</nav>
</header>
 
<script type="text/javascript">
 //Funcion para ocultar y mostrar el menu
 function ocultar(){
  var x = document.getElementById("cNavbar");
             if (x.className.indexOf("mostrar") == -1) {
                 x.className += " mostrar";
             } else { 
                 x.className = x.className.replace(" mostrar", "");
                
             }
 }
//Funcion para ocultar y mostrar la barra de busqueda
  
    function oculta() {
  
             var x = document.getElementById("buscar");
             if (x.className.indexOf("mostrar") == -1) {
                 x.className += " mostrar";
             } else { 
                 x.className = x.className.replace(" mostrar", "");
                
             }
         }


</script>