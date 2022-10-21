<?php
include_once ('../global.php')
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
    <!-- header  -->
   <header class="mx-auto container bg-red-200 rounded-lg">
       <header class="mx-auto container bg-red-200 rounded-lg flex justify-between items-center">
         <h1 class="text-5xl font-medium p-8 text-red-500">Quản trị website</h1>
         <label for="">Xin chào, <?= $_SESSION['auth']['name']?></label>

    </header>
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
        <h1 class=" p-6 text-2xl font-medium ">Thống kê</h1>
    </div>
    <!-- content -->
    <div class="mx-auto container">
       <table border="1" class="w-full mt-6 text-center">
        <tr class=" bg-green-300 text-2xl">
            <th  class="border border-blue-200 p-6" >Mã Danh mục</th>
            <th  class="border border-blue-200">Tên danh mục</th>
            <th  class="border border-blue-200">Số lượng sản phẩm</th>
            <th  class="border border-blue-200">Giá cao nhất</th>
            <th  class="border border-blue-200">Giá trung bình</th>
            <th  class="border border-blue-200">Giá thấp nhất</th>

        </tr>
        <tr class="border border-blue-200">
            <td  class="border border-blue-200 p-3">1</td>
            <td  class="border border-blue-200">Áo sơ mi </td>
            <td  class="border border-blue-200">25</td>
            <td  class="border border-blue-200">1.000.000 đ</td>
            <td  class="border border-blue-200">625.000 đ</td>
            <td  class="border border-blue-200">250.000 đ</td>
        </tr>
        <tr class="border border-blue-200">
            <td  class="border border-blue-200 p-3">2</td>
            <td  class="border border-blue-200">Áo polo </td>
            <td  class="border border-blue-200">20</td>
            <td  class="border border-blue-200">1.000.000 đ</td>
            <td  class="border border-blue-200">625.000 đ</td>
            <td  class="border border-blue-200">250.000 đ</td>
        </tr>
        <tr class="border border-blue-200">
            <td  class="border border-blue-200 p-3">3</td>
            <td  class="border border-blue-200">Áo dài</td>
            <td  class="border border-blue-200">30</td>
            <td  class="border border-blue-200">1.000.000 đ</td>
            <td  class="border border-blue-200">625.000 đ</td>
            <td  class="border border-blue-200">250.000 đ</td>
        </tr>
        <tr class="border border-blue-200">
            <td  class="border border-blue-200 p-3">4</td>
            <td  class="border border-blue-200">Áo khoác </td>
            <td  class="border border-blue-200">25</td>
            <td  class="border border-blue-200">1.000.000 đ</td>
            <td  class="border border-blue-200">625.000 đ</td>
            <td  class="border border-blue-200">250.000 đ</td>
        </tr>
       </table>
       <button class="p-4 bg-orange-400 font-medium rounded-lg hover:text-white mt-4">Xem biểu đồ</button>
    </div>  
</body>

</html>