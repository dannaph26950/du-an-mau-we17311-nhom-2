<?php
include_once '../dao/pdo.php';
include_once '../global.php';
include_once '../dao/products.php';
pdo_get_connection();


$id = $_GET["id"];

$rows =products_select_one($id);
if(isset($_POST["edit"])){
    $name=$_POST["name"];
    $quantily=$_POST["quantily"];
    $detail=$_POST["detail"];
    $price=$_POST["price"];
    $category_id=$_POST["category_id"];
    $sale_id=$_POST["sale_id"];
    product_update($id,$name,$quantily,$detail,$price,$category_id,$sale_id);
    
   header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<header class="mx-auto container bg-red-200 rounded-lg flex justify-between items-center">
         <h1 class="text-5xl font-medium p-8 text-red-500">Quản trị website</h1>
                 <?php echo isset($_SESSION['auth']['name'])? 'Xin chào,' . $_SESSION['auth']['name'] : '' ?>


    </header>

   
    <!-- nav  -->
    <div class="mx-auto container m-10 bg-slate-400 rounded-lg">
    <nav class=" flex p-6 gap-10">
            <a href="<?= ADMIN_URL?>" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Trang chủ</a>
            <a href="<?= ADMIN_URL?>?loaihang" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Loại hàng</a>
            <a href="<?= ADMIN_URL?>?products" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Sản phẩm</a>
            <a href="<?= ADMIN_URL?>?user" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Khách hàng</a>
            <a href="<?= ADMIN_URL?>?comment" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Bình luận </a>
            <a href="<?= ADMIN_URL?>?statistical" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Thống kê</a>
        </nav>
    </div>
    <!-- tên chức năng -->
    <div class="mx-auto container bg-green-200 rounded-lg">
        <h1 class=" p-6 text-2xl font-medium ">Danh sách sản phẩm</h1>
    </div>
    <form method="post" class="container flex items-center flex-col content-center mx-auto justify-center justify-items-center">
        <h2 class="font-black text-3xl">SỬA THÔNG TIN</h2>
        <table class="w-1/2 leading-7 ">
            <tr class="w-full">
                <td class="w-1/4">TÊN HÀNG</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="name" value="<?php echo $rows["name"]?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">SỐ LƯỢNG</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="quantily" value="<?php echo $rows["quantily"]?>"></td>
            </tr >
            <tr class="w-full">
                <td class="w-1/4">MÔ TẢ</td>
                <td class=w-3/4><input type="text" class="border border-soild w-1/2" name="detail" value="<?php echo $rows["detail"]?>"></td>
            </tr>
            <tr class="w-full">
              <td    class="w-1/4">GIÁ</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="price" value="<?php echo $rows["price"]?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">THỂ LOẠI</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="category_id" value="<?php echo $rows["category_id"]?>"></td>
            </tr class="w-1/2">
            <tr class="w-full">
                <td class="w-1/4">SALE</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="sale_id" value="<?php echo $rows["sale_id"]?>"></td>
            </tr>
        </table>
        <button name="edit"  class="border border-soild w-1/12 rould rounded-full bg-blue-500 hover:bg-red-500">Sửa</button>
    </form>
</body>
</html>