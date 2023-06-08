<?php
// Verificar si se ha proporcionado el ID del producto en la URL
if (isset($_REQUEST['id_producto'])) {
  $id_producto = $_GET['id_producto'];

  // Aquí puedes realizar las operaciones necesarias utilizando el ID del producto
  // ...

  // Ejemplo de salida
  echo "ID del producto: " . $id_producto;
} else {
  echo "No se ha proporcionado el ID del producto.";
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digital Retro Detalle</title>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>

<body>
  <header>
    <div class="logo-place"><img src="https://images.cooltext.com/5660233.png"></div>
    <!-- <div class="nombre">Digital Retro</div> -->
    <div class="search-place">
      <input type="text" id="idbusqueda" placeholder="Encuentra todo los que necesitas">
      <button class="btn-main btn-search"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    <div class="option-place"></div>
    <div class="item-option" title="Registrate"><a href="register.php"> <i class="fa fa-user-circle-o"
          aria-hidden="true"></i></a></div>
    <div class="item-option" title="Iniciar Sesion"><a href="loginC.php"><i class="fa fa-sign-in"
          aria-hidden="true"></i></a></div>
    <div class="item-option" title="Mis Compras"><a href="#"> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
    </div>


  </header>
  <div class="main-content">
    <div class="content-page">
      <div class="title-section"></div>
      <a href="">
        <div class="row">
        </div>
      </a>
    </div>
  </div>
</body>

</html>