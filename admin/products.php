<?php

include_once '../global.php';
include_once '../dao/pdo.php';
include_once '../dao/products.php';
$data = products_select_all();

if(isset($_POST['add'])){
    $conn = pdo_get_connection();
    $name=$_POST["name"];
    $quantily=$_POST["quantily"];
    $detail=$_POST["detail"];
    $price=$_POST["price"];
    $category_id=$_POST["category_id"];
    $sale_id=$_POST["sale_id"];
    products_insert($name,$quantily,$detail,$price,$category_id,$sale_id);
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
  
       <header class="mx-auto container bg-red-200 rounded-lg flex justify-between items-center">
         <h1 class="text-5xl font-medium p-8 text-red-500">Quản trị website</h1>
         <label for="">Xin chào, <?= $_SESSION['auth']['name']?></label>

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
    <form action="" class="container mx-auto" method="post">
        <table class="w-1/2 leading-7 ">
            <tr class="w-full">
                <td class="w-1/4">TÊN HÀNG</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="name" ></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">SỐ LƯỢNG</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="quantily"></td>
            </tr >
            <tr class="w-full">
                <td class="w-1/4">MÔ TẢ</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="detail"></td>
            </tr>
            <tr class="w-full">
              <td    class="w-1/4">GIÁ</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="price" ></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">THỂ LOẠI</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="category_id" ></td>
            </tr class="w-1/2">
            <tr class="w-full">
                <td class="w-1/4">SALE</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="sale_id" ></td>
            </tr>
    <?php echo isset($succes)? $succes :'' ?>

        </table>

    <button type="submit" name="add" class="p-4 border rounded-lg bg-orange-400 hover:text-white font-medium mt-8">Thêm sản phẩm</button>
        </form>

    <!-- tên chức năng -->
    <div class="mx-auto container bg-green-200 rounded-lg">
        <h1 class=" p-6 text-2xl font-medium ">Danh sách sản phẩm</h1>
    </div>

    <!-- content -->
    <div class="mx-auto container">
      

       <table border="1" class="w-full mt-6 text-center">
           
        
            <tr class="bg-green-300 text-2xl" >
                
                <th class="p-6">Mã sản phẩm</th>
                <th class="border border-blue-200 p-3">Tên sản phẩm</th>
                <th class="border border-blue-200 p-3">Images</th>
                <th class="border border-blue-200 p-3 w-1/6">Giá </th>
                <th class="border border-blue-200 p-3">Số lượng</th>
                <th class="border border-blue-200 p-3">Mô tả</th>
                <th class="border border-blue-200 p-3 w-1/6">Chức năng</th>
            </tr>
             <?php foreach($data as $key =>$value){ ?>
            <tr class="border border-blue-200">
                <td class="border border-blue-200 p-3"><?php echo $key+1; ?></td>
                <td class="border border-blue-200 p-3 md:w-60"><?php echo $value['name']; ?></td>
                <td class="border border-blue-200 p-3"><center><img src='<?php echo ($value['img_name']); ?>' class=" w-24 h-24 "></center></td>
                <td class="border border-blue-200 p-3"><?php echo $value['price']; ?> .000đ</td>
                <td class="border border-blue-200 p-3"><?php echo $value['quantily']; ?></td>
                <td class="border border-blue-200 p-3 md:w-96"><?php echo $value['detail']; ?></td>
                <th class="  flex flex-col p-3 m-3" >
                <a href="edit.php?id=<?php echo $value['id']; ?> "> <button  class="border  rounded-md bg-slate-100 hover:bg-blue-200 mb-3"
                 name="btn-sua" > Sửa </button></a>
                 <button class="border  rounded-md bg-slate-100 hover:bg-blue-200 mb-3" onclick="del('delete.php?id=<?php echo $value['id']?>')" >xoa</button>
                    <button class="border  rounded-md bg-slate-100 hover:bg-blue-200" name="btn-sua" >Chi tiết </button>
                </th>
            </tr>
            <?php } ?>
           
       </table>
    </div>
    <script>
     
        function del(aaaa){
            if( confirm('xac nhan xoa')){
                return document.location = aaaa;
            }
        }

    </script>
</body>

</html>