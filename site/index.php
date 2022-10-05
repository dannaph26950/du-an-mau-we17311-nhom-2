<?php
require_once '../global.php';
if(isset($_GET['products'])){

    $VIEW_NAME = 'product.php';
}elseif(isset($_GET['cart'])){

    $VIEW_NAME = 'cart.php';
}
elseif(isset($_GET['sale'])){

    $VIEW_NAME = 'sale.php';
}
elseif(isset($_GET['login'])){

    $VIEW_NAME = 'login.php';
}
elseif(isset($_GET['register'])){

    $VIEW_NAME = 'register.php';
}
elseif(isset($_GET['details'])){

    $VIEW_NAME = 'details.php';
}
elseif(isset($_GET['colection'])){

    $VIEW_NAME = 'colection.php';
}
elseif(isset($_GET['introduce'])){

    $VIEW_NAME = 'introduce.php';
}
else{

    $VIEW_NAME = 'home.php';
}


include_once $VIEW_NAME;

?>