<?php
include_once '../dao/pdo.php';
include_once '../dao/products.php';
$id = $_GET['id'];
echo $id;
$conn = pdo_get_connection();
$sql = "DELETE FROM products WHERE  id=$id";
echo $sql;
$conn->query($sql);
header('location:index.php');

?>