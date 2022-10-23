<?php
include_once '../dao/pdo.php';
include_once '../dao/products.php';
$id = $_GET['id'];

products_destroy($id);
header('location:index.php');

?>