<?php
include_once '../dao/pdo.php';
include_once '../global.php';
include_once '../dao/user.php';
include_once '../dao/loai.php';
include_once '../dao/role.php';
$data_role = role_select_all();
var_dump($data_role);
$id = $_GET['id'];
$rows =user_select_by_id($id);


if (isset($_POST['edit'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role_id = $_POST['role_id'];
  
    user_update($id,$mail,$address,$phone,$role_id,$name);
    $succes = "sua nguoi dung thanh cong";
    header("location:user.php");
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
    <?php echo isset($succes) ? $succes : '' ?>

    <!-- header  -->
    <header class="mx-auto container bg-red-200 rounded-lg">
        <header class="mx-auto container bg-red-200 rounded-lg flex justify-between items-center">
            <h1 class="text-5xl font-medium p-8 text-red-500">Quản trị website</h1>
            <h2> <?php echo isset($_SESSION['name_admin']) ? 'Xin chào,' . $_SESSION['name_admin'] : '' ?> </h2>

        </header>
    </header>
    <!-- nav  -->
    <div class="mx-auto container m-10 bg-slate-400 rounded-lg">
        <nav class=" flex p-6 gap-10">
            <a href="<?= ADMIN_URL ?>" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Trang chủ</a>
            <a href="<?= ADMIN_URL ?>?loaihang" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Loại hàng</a>
            <a href="<?= ADMIN_URL ?>?products" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Sản phẩm</a>
            <a href="<?= ADMIN_URL ?>?user" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Khách hàng</a>
            <a href="<?= ADMIN_URL ?>?comment" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Bình luận </a>
            <a href="<?= ADMIN_URL ?>?statistical" class="text-2xl rounded-lg border p-2 hover:bg-orange-400 hover:text-white">Thống kê</a>
        </nav>
    </div>

    <form method="post" class="container flex items-center flex-col content-center mx-auto justify-center justify-items-center">
    <div class="mx-auto container bg-green-200 rounded-lg">
        <h1 class=" p-6 text-2xl font-medium">Sửa Thông Tin</h1>
    </div>
        <table class="w-1/2 leading-7 ">
            <tr class="w-full">
                <td class="w-1/4">name</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="name" value="<?php echo $rows["name"] ?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">email</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="mail" value="<?php echo  $rows['email'] ?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">password</td>
                <td class="w-3/4"><input type="password" class="border border-soild w-1/2" name="password" value="<?php echo $rows["password"] ?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">address</td>
                <td class=w-3/4><input type="text" class="border border-soild w-1/2" name="address" value="<?php echo $rows["address"] ?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">Phone</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="phone" value="<?php echo $rows["phone_number"] ?>"></td>
            </tr>
            <tr class="w-full">
                <td>Thể Loại</td>
                <td>
                    <select name="role_id">
                        <?php foreach ($data_role as $key => $value) { ?>
                            <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
        </table>
        <button name="edit" class="border border-soild w-1/12 rould rounded-full bg-blue-500 hover:bg-red-500">Sửa</button>
    </form>
</body>

</html>
