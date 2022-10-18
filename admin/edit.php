<?php
include_once '../dao/pdo.php';
include_once '../global.php';
include_once '../dao/pdo.php';
include_once '../dao/products.php';
pdo_get_connection();


$id = $_GET["id"];
$sql="SELECT * FROM products WHERE id='$id'";
$rows=$conn->query ($sql) ->fetch();

if(isset($_POST["edit"])){
    $name=$_POST["name"];
    $quantily=$_POST["quantily"];
    $detail=$_POST["detail"];
    $price=$_POST["price"];
    $category_id=$_POST["category_id"];
    $sale_id=$_POST["sale_id"];

    $sql_update="UPDATE products SET name='$name',quantily='$quantily',detail='$detail',price='$price',category_id='$category_id',sale_id='?$sale_id' WHERE id=$id";
   $conn->exec ($sql_update);
   echo " <script>window.location.href='products.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <<form method="post">
        <h2>SỬA THÔNG TIN</h2>
        <table>
            <tr>
                <td>TÊN HÀNG</td>
                <td><input type="text" name="name" value="<?php echo $row["name"]?>"></td>
            </tr>
            <tr>
                <td>SỐ LƯỢNG</td>
                <td><input type="number" name="quantily" value="<?php echo $row["quantily"]?>"></td>
            </tr>
            <tr>
                <td>MÔ TẢ</td>
                <td><input type="text" name="detail" value="<?php echo $row["detail"]?>"></td>
            </tr>
            <tr>
                <td>GIÁ</td>
                <td><input type="number" name="price" value="<?php echo $row["price"]?>"></td>
            </tr>
            <tr>
                <td>THỂ LOẠI</td>
                <td><input type="number" name="category_id" value="<?php echo $row["category_id"]?>"></td>
            </tr>
            <tr>
                <td>SALE</td>
                <td><input type="number" name="sale_id" value="<?php echo $row["sale_id"]?>"></td>
            </tr>
        </table>
    </form>
</body>
</html>