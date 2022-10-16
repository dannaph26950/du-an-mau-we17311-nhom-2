<?php
include_once ('../global.php');

if(isset($_GET['products'])){

    $VIEW_NAME = 'products.php';
}elseif(isset($_GET['statistical'])){

    $VIEW_NAME = 'statistical.php';
}
elseif(isset($_GET['comment'])){

    $VIEW_NAME = 'comment.php';
}
elseif(isset($_GET['user'])){

    $VIEW_NAME = 'user.php';
}
elseif(isset($_GET['loaihang'])){

    $VIEW_NAME = 'loaihang.php';
}
elseif(isset($_GET['listloaihang'])){

    $VIEW_NAME = 'listloaihang.php';
}
else{

    $VIEW_NAME = 'products.php';
}


include_once $VIEW_NAME;

?>