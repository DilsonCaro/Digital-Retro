<?php 
define("CLIENT_ID","AdZV8c-ul9_9BWN3K2L2s2XeqYMGp7X6wVABZ9FwL_AehR3yr5pL0KKFPV0nseh9k8mc0YwUX0kW1oVm");
define("CURRENCY","USD");
define("KEY_TOKEN","APR.wqc-354*");
define("MONEDA","CLP$");

session_start();
$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}
?>