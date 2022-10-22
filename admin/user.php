<?php
include_once ('../global.php');
include_once ('../dao/user.php');
include_once ('../dao/pdo.php');
include_once '../dao/role.php';
$data = user_select_all_by_role();
$data_role = role_select_all();

if(isset($_POST['add'])){
    $flag = true;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fake_pass=password_hash($password, PASSWORD_DEFAULT);
    $addres = $_POST['addres'];
    $phone = $_POST['phone'];
    $role_id = $_POST['role_id'];
    if(empty($name)){
        $err_name = 'không được để trống';
       $flag=false;
   }
   if(empty($email)){
       $err_email = 'không được để trống';
       $flag=false;
   }
   if(empty($phone)){
       $err_phone = 'không được để trống';
       $flag=false;
   }
   if(empty($addres)){
       $err_adress = 'không được để trống';
       $flag=false;
   }
   if(empty($password)){
       $err_pass = 'không được để trống';
       $flag=false;
   }
   if($flag==true){
    user_insert($email,$fake_pass,$addres,$phone,$role_id,$name);
    $succes = "Them nguoi dung thanh cong";
   }
  
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
    <!-- header  -->
   <header class="mx-auto container bg-red-200 rounded-lg">
       <header class="mx-auto container bg-red-200 rounded-lg flex justify-between items-center">
         <h1 class="text-5xl font-medium p-8 text-red-500">Quản trị website</h1>
         

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
    <form action="" method="POST" class="w-1/2 container mx-auto">
        <p>them moi</p>
        <label class="">Name</label>
        <input type="text" class="w-full border" placeholder="<?php echo isset($err_name)?  $err_name: 'full name' ?>" name="name">
        <label class="">Email</label>
        <input type="text" class="w-full border" placeholder="<?php echo isset($err_email)?  $err_email: 'email' ?>" name="email">
        <label class="">Password</label>
        <input type="password" class="w-full border" placeholder="<?php echo isset($err_pass)?  $err_pass: 'password' ?>" name="password">
        <label class="">Addres</label>
        <input type="text" class="w-full border" placeholder="<?php echo isset($err_adress)?  $err_adress: 'address' ?>" name="addres">
        <label class="">Phone number</label>
        <input type="text" class="w-full border" placeholder="<?php echo isset($err_phone)?  $err_phone: 'phone' ?>" name="phone">
        <label class="">Vai trò</label>
        <select name="role_id">
               <?php foreach($data_role as $key =>$value){ ?>
                <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                <?php } ?>
        </select>
        <br>
        <button name="add" type="submit" class="p-2 px-4 border rounded-lg bg-orange-400 hover:text-white font-medium mt-8">Thêm Tài khoản</button>
        <?php echo isset($succes)? $succes : '' ?>
        </form>
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
               <td class="border border-blue-200">
                <?php echo $value['role_name']  ?></td>
               <td class="border border-blue-200"></td>
               <!-- <td class="border border-blue-200">19</td> -->
               <td class="border border-blue-200">
             <a href="edituser.php?id=<?= $value['id']?>">   <button name="btn-detal"  class="border rounded-md bg-slate-100 px-2">Sửa</button></a>
                <a href="user.php?id=<?php echo $value['id'] ?>"><button name="btn-delete" class="border rounded-md bg-slate-100 px-2">Xóa</button></a>
               </td>
            </tr>
            <?php } ?>
        </table>
        
    </div>
</body>
</html>