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
        <h1 class=" p-6 text-2xl font-medium ">Danh sách khách hàng</h1>
    </div>
    <!-- content -->
    <div class="mx-auto container">
        <table border="1" class="mt-6 w-full text-center">
            <tr class=" bg-green-300 border border-blue-200 text-2xl">
                <th class="p-6 border border-blue-200">Mã khách hàng</th>
                <th class="border border-blue-200">Tên khách hàng</th>
                <th class="border border-blue-200">Vai trò</th>
                <th class="border border-blue-200">Avatar</th>
                <th class="border border-blue-200">Tuổi</th>
                <th class="border border-blue-200">Chức năng</th>
            </tr>
            <tr class="border border-blue-200">
               <td class="p-3 border border-blue-200">1</td>
               <td class="border border-blue-200">nqv</td>
               <td class="border border-blue-200">Quản trị</td>
               <td class="border border-blue-200"></td>
               <td class="border border-blue-200">19</td>
               <td class="border border-blue-200">
                <button name="btn-detal" class="border rounded-md bg-slate-100 px-2">Chi tiết</button>
                <button name="btn-delete" class="border rounded-md bg-slate-100 px-2">Xóa</button>
               </td>
            </tr>
            <tr class="border border-blue-200">
                <td class="p-3">2</td>
                <td class="border border-blue-200">nvg</td>
                <td class="border border-blue-200">Khách hàng</td>
                <td class="border border-blue-200"></td>
                <td class="border border-blue-200">19</td>
                <td class="border border-blue-200">
                 <button name="btn-detal" class="border rounded-md bg-slate-100 px-2">Chi tiết</button>
                 <button name="btn-delete" class="border rounded-md bg-slate-100 px-2">Xóa</button>
                </td>
             </tr>
             <tr class="border border-blue-200">
                <td class="p-3 border border-blue-200">3</td>
                <td class="border border-blue-200">nmh</td>
                <td class="border border-blue-200">Khách hàng</td>
                <td class="border border-blue-200"></td>
                <td class="border border-blue-200">19</td>
                <td class="border border-blue-200">
                 <button name="btn-detal" class="border rounded-md bg-slate-100 px-2">Chi tiết</button>
                 <button name="btn-delete" class="border rounded-md bg-slate-100 px-2">Xóa</button>
                </td>
             </tr>

        </table>
        <button type="submit" class="p-2 px-4 border rounded-lg bg-orange-400 hover:text-white font-medium mt-8">Vai trò</button>
    </div>
</body>

</html>