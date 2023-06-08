<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Digital Retro Store</title>
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
      <div class="title-section">Productos descatados</div>
      <a href="">
        <div class="row">
          <?php
          // Realizar la consulta
          include_once("servicios/_conexion.php");
          $sql = "SELECT id_productos, imagen, nombre_videojuego, precio, descripcion FROM productos";
          $result = mysqli_query($con, $sql);

          // Verificar si se encontraron productos
          if (mysqli_num_rows($result) > 0) {
            // Recorrer los resultados y mostrar los productos 
            while ($row = mysqli_fetch_assoc($result)) {
              $id_producto=$row['id_productos'];
              $imagen = $row['imagen'];
              $nombre_videojuego = $row['nombre_videojuego'];
              $precio = $row['precio'];
              $descripcion = $row['descripcion'];
              $format_p= number_format($precio,0,',','.');
              // echo '<button type="button" name="detalle" onclick="window.location.href=\'detalles.php?id_producto=' . $id_producto . '\'">Ver detalles</button>';
              echo '<div class="product-box">';
              echo '<a href="">';
              echo '<div class="product">';
              echo '<img src="data:image/jpg;base64,' . base64_encode($imagen) . '" class="card-img-top" alt="...">';
              echo '<div class="card-body">';
              echo '<h5 class="detail-tittle">' . $nombre_videojuego . '</h5>';
              echo '<p class="detail-description">' . $descripcion . '</p>';
              echo '<p class="detail-price">$' . $format_p . '</p>';
              echo '<button type="button" name="detalle" onclick="window.location.href=\'detalles.php?id_producto=' . $id_producto . '\'">Ver detalles</button>';
              echo '</div>';
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
          } else {
            echo "No se encontraron productos.";
          }
          ?>
        </div>
      </a>
    </div>
  </div>
</body>

</html>