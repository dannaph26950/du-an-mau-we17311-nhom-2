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
        <h1 class="text-5xl font-medium p-8 text-red-500">Quản trị website</h1>
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
    <!-- content -->
    <div class="mx-auto container">
       <table border="1" class="w-full mt-6 text-center">
            <tr class="bg-green-300 text-2xl">
                <th class="p-6">Mã sản phẩm</th>
                <th class="border border-blue-200 p-3">Tên sản phẩm</th>
                <th class="border border-blue-200 p-3">Images</th>
                <th class="border border-blue-200 p-3">Giá </th>
                <th class="border border-blue-200 p-3">Số lượng</th>
                <th class="border border-blue-200 p-3">Mô tả</th>
                <th class="border border-blue-200 p-3">Chức năng</th>
            </tr>
            <tr class="border border-blue-200">
                <td class="border border-blue-200 p-3">1</td>
                <td class="border border-blue-200 p-3">Áo sơ mi</td>
                <td class="border border-blue-200 p-3"><center><img src="../content/img/sale 2.png" class=" w-24 h-24 "></center></td>
                <td class="border border-blue-200 p-3">400.000 đ</td>
                <td class="border border-blue-200 p-3">20</td>
                <td class="border border-blue-200 p-3">Aó polo mặc thoáng mát...</td>
                <td class="border border-blue-200 p-3"><button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Sửa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Xóa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Chi tiết </button></td>
            </tr>
            <tr class="border border-blue-200">
                <td class="border border-blue-200 p-3">2</td>
                <td class="border border-blue-200 p-3">Áo sơ mi</td>
                <td class="border border-blue-200 p-3"><center><img src="../content/img/sale 2.png" class=" w-24 h-24 "></center></td>
                <td class="border border-blue-200 p-3">400.000 đ</td>
                <td class="border border-blue-200 p-3">20</td>
                <td class="border border-blue-200 p-3">Aó polo mặc thoáng mát...</td>
                <td class="border border-blue-200 p-3"><button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Sửa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Xóa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Chi tiết </button></td>
            </tr>
            <tr class="border border-blue-200">
                <td class="border border-blue-200 p-3">3</td>
                <td class="border border-blue-200 p-3">Áo sơ mi</td>
                <td class="border border-blue-200 p-3"><center><img src="../content/img/sale 2.png" class=" w-24 h-24 "></center></td>
                <td class="border border-blue-200 p-3">400.000 đ</td>
                <td class="border border-blue-200 p-3">20</td>
                <td class="border border-blue-200 p-3">Aó polo mặc thoáng mát...</td>
                <td class="border border-blue-200 p-3"><button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Sửa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Xóa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Chi tiết </button></td>
            </tr>
            <tr class="border border-blue-200">
                <td class="border border-blue-200 p-3">4</td>
                <td class="border border-blue-200 p-3">Áo sơ mi</td>
                <td class="border border-blue-200 p-3"><center><img src="../content/img/sale 2.png" class=" w-24 h-24 "></center></td>
                <td class="border border-blue-200 p-3">400.000 đ</td>
                <td class="border border-blue-200 p-3">20</td>
                <td class="border border-blue-200 p-3">Aó polo mặc thoáng mát...</td>
                <td class="border border-blue-200 p-3"><button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Sửa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Xóa </button>
                    <button class="border rounded-md bg-slate-100 px-2" name="btn-sua" >Chi tiết </button></td>
            </tr>
            
       </table>
       <button type="submit" class="p-4 border rounded-lg bg-orange-400 hover:text-white font-medium mt-8">Thêm sản phẩm</button>
    </div>
</body>

</html>