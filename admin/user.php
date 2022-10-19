<?php
include_once ('../global.php');
include_once ('../dao/user.php');
include_once ('../dao/pdo.php');
include_once '../dao/role.php';
$data = user_select_all();
$role_all=role_select_all();


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
                <!-- <th class="border border-blue-200">Tuổi</th> -->
                <th class="border border-blue-200">Chức năng</th>
            </tr>
<?php 
foreach($data as $key => $value){
?>
            <tr class="border border-blue-200">
               <td class="p-3 border border-blue-200"><?php echo $value['id']?></td>
               <td class="border border-blue-200"><?php echo $value['name'] ?></td>
               <td class="border border-blue-200"><?php if($value['role_id'] ==1){
                echo ('Khách hàng');
               }elseif($value['role_id'] ==2){echo ('Khách hàng'); } else{ echo ('Tác giả');}?></td>
               <td class="border border-blue-200"></td>
               <!-- <td class="border border-blue-200">19</td> -->
               <td class="border border-blue-200">
                <button name="btn-detal" class="border rounded-md bg-slate-100 px-2">Sửa</button>
                <a href="user.php?id=<?php echo $value['id'] ?>"><button name="btn-delete" class="border rounded-md bg-slate-100 px-2">Xóa</button></a>
               </td>
            </tr>
            <?php } ?>
        </table>
        <form action="" method="POST" class="w-[400px]">
        <label class="">Name</label>
        <input type="text" class="w-full border" name="name">
        <label class="">Email</label>
        <input type="text" class="w-full border" name="email">
        <label class="">Password</label>
        <input type="password" class="w-full border" name="password">git
        <label class="">Addres</label>
        <input type="text" class="w-full border" name="addres">
        <label class="">Phone number</label>
        <input type="text" class="w-full border" name="phone">
        <label class="">Vai trò</label>
        <section name="role_id">
               <?php foreach($role_all as $key =>$valueRole){ ?>
                <option value="<?php echo $valueRole['id'] ?>"><?php echo $valueRole['name'] ?></option>
                <?php } ?>
        </section>
        <button type="submit" class="p-2 px-4 border rounded-lg bg-orange-400 hover:text-white font-medium mt-8">Thêm Tài khoản</button>
        </form>
    </div>
</body>
</html>