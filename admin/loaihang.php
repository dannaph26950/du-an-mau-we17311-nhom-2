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
        <h1 class=" p-6 text-2xl font-medium ">Thêm loại mới</h1>
    </div>
    <!-- content -->
    <div class="mx-auto container">
        <form action="" method="" class="w-96 p-10">
            <span class="font-medium text-xl">Mã loại</span><br>
            <input type="text" class="border rounded-lg w-full py-2 my-4" placeholder="auto number">
            <span class="font-medium text-xl"> Tên loại</span><br>
            <input type="text" class="border rounded-lg w-full py-2 my-4" placeholder="Name ">
            <button type="submit" class=" p-2 font-medium rounded-lg border bg-orange-400 hover:text-white" name="btn-submit ">Thêm mới</button>
            <button class="p-2 font-medium rounded-lg border bg-orange-400 hover:text-white" name="btn-reset">Nhập lại</button>
            <a href="listloaihang.php" class="p-2 font-medium rounded-lg border bg-orange-400 hover:text-white" >Danh sách</a>
        </form>
    </div>
</body>

</html>