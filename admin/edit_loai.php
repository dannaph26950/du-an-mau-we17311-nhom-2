<?php
include_once '../dao/pdo.php';
include_once '../global.php';

$conn = pdo_get_connection();
$id = $_GET["id"];
$sql = "SELECT * FROM  categories WHERE id ='$id' ";
$rows = $conn->query($sql)->fetch();
if (isset($_POST['btn-reset'])) {
    $name = $_POST['name'];
    $sql = "UPDATE categories SET name='$name' WHERE id = '$id' ";
    $conn->exec($sql);
    header("location:listloaihang.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <header class="mx-auto container bg-red-200 rounded-lg flex justify-between items-center">
        <h1 class="text-5xl font-medium p-8 text-red-500">Quản trị website</h1>
        <h2> <?php echo isset($_SESSION['name_admin']) ? 'Xin chào,' . $_SESSION['name_admin'] : '' ?> </h2>

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
    <!-- tên chức năng -->
    <div class="mx-auto container bg-green-200 rounded-lg">
        <h1 class=" p-6 text-2xl font-medium ">Sửa Loại Hàng</h1>
    </div>

    <div class="mx-auto container">
        <form action="" method="post" class="w-96 p-10">
            <span class="font-medium text-xl"> Tên loại</span><br>
            <input name="name" type="text" class="border rounded-lg w-full py-2 my-4" placeholder="Name" value="<?php echo $rows["name"] ?>">
            <button class="p-2 font-medium rounded-lg border bg-orange-400 hover:text-white" name="btn-reset">Gửi</button>
        </form>
        <?php echo isset($succes) ? $succes : '' ?>
    </div>
</body>

</html>