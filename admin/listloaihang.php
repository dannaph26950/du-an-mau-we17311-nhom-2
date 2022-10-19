<?php
include_once ('../global.php');
include_once ('../dao/pdo.php');
include_once ('../dao/loai.php');
$data = loai_select_all();
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
        <h2> <?php echo isset($_SESSION['name_admin'])? 'Xin chào,'.$_SESSION['name_admin']: '' ?> </h2>

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
        <h1 class=" p-6 text-2xl font-medium ">Danh sách loại hàng</h1>
    </div>
    <!-- content -->
    <div class="mx-auto container">
       <table class=" w-full mt-4 " >
            <tr class="bg-green-300  border border-blue-200 text-2xl">
                <th  class="p-6 border border-blue-200">MÃ loại </th>
                <th class="border border-blue-200">Tên loại</th>
                <th class="border border-blue-200">Chức năng</th>
            </tr>
            <?php foreach($data as $key => $value){ ?>
            <tr class="text-center border border-blue-200">
                <td  class="border border-blue-200 p-3" ><?php echo $key?></td>
                <td class="border border-blue-200"> <?php echo $value['name'] ?></td></td>
                <td class="border border-blue-200"><button type="submit" class="border rounded-md bg-slate-100 px-2" name="btn-edit">Sửa </button>
                    <button type="submit" class="border rounded-md bg-slate-100 px-2" name="btn-delete">Xóa</button></td>
            </tr>
            <?php  } ?>
           
       </table>
       <button type="submit" class=" p-2 font-medium rounded-lg border bg-orange-400 hover:text-white mt-4" name="btn-submit ">Thêm mới</button>
    </div>
</body>

</html>