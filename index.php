<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="shortcut icon" href="img/logo-mywebsite-urian-viera.svg"/>
  <title>Cómo Importar Excel a MYSQL con PHP sin Libreria de forma Fácil :: WebDeveloper Urian Viera</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/cargando.css">
  <style>
  body{
    height: 100vh;
    width: 100%;
    background-color: #F5F5FC !important;
    color: #555;
  }

/***STYLE PARA EL FILE***/
.zmdi-upload{
    padding: 0px 15px 0px 0px;
}
.zmdi-upload:hover{
    color: black;
    transition: color 0.2s linear 0.2s;
}

.file-input__input {
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}

.file-input__label {
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  border-radius: 4px;
  font-size: 14px;
  font-weight: 600;
  color: #fff;
  font-size: 14px;
  padding: 10px 12px;
  background-color: #4245a8;
  box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.25);
}
/*******/

.btn-enviar{
  color: #fff;
  font-weight: 600;
  padding: 10px 45px;
  background-color: coral;
  border: none;
  border-radius: 2px;
}
.btn-enviar:hover{
  color: #333;
}
h3{
    font-size: 35px;
    font-weight: 900;
    color: #ffa900;
    margin-top: 150px;
}
  </style>
</head>
<body>

<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-dark fixed-top" style="background-color: #563d7c !important;">
    <ul class="navbar-nav mr-auto collapse navbar-collapse">
      <li class="nav-item active">
        <a href="index.php"> 
          <img src="img/logo-mywebsite-urian-viera.svg" alt="Web Developer Urian Viera" width="120">
        </a>
      </li>
    </ul>
    <div class="my-2 my-lg-0">
      <h5 class="navbar-brand">Web Developer Urian Viera </h5>
    </div>
</nav>


<div class="container mt-7">
<br><br>
<br><br>


<h3 class="text-center">
    Cómo Importar Excel a MYSQL con PHP sin Libreria de forma Fácil
</h3>
<hr>



<form action="recibe_excel.php" method="POST" enctype="multipart/form-data"/>
  <div class="file-input text-center">
      <input  type="file" name="dataCliente" id="file-input" class="file-input__input"/>
      <label class="file-input__label" for="file-input">
        <i class="zmdi zmdi-upload zmdi-hc-2x"></i>
        <span>Elegir Archivo Excel</span></label
      >
    </div>
<div class="text-center mt-5">
    <input type="submit" name="subir" class="btn-enviar" value="Subir Excel"/>
</div>
</form>


</div>


<script src="js/jquery.min.js"></script>
<script src="'js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });      
});
</script>

</body>
</html>