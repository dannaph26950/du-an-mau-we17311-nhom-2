<?php 
include_once '../dao/pdo.php';
include_once '../global.php';
include_once '../dao/user.php';
include_once '../dao/loai.php';
include_once '../dao/role.php';
$he= role_select_all();
$id = $_GET['id'];
$conn = pdo_get_connection();
$sql = "SELECT * FROM  user WHERE id ='$id'";
$rows=$conn->query ($sql) ->fetch();
$real_pass= password_verify($rows['password'], PASSWORD_DEFAULT);
if(isset($_POST['edit'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $role_id = $_POST['role_id'];
    $fake_pass=password_hash($_POST['password'], PASSWORD_DEFAULT);
  
    $sql_update="UPDATE user SET email='$mail',password='$fake_pass',address='$address',phone_number='$phone',role_id='$role_id',name='$name' WHERE id=$id";
  echo $sql_update;
    $conn -> exec($sql_update);
   $succes = "sua nguoi dung thanh cong";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo isset($succes)? $succes : '' ?>

<form method="post" class="container flex items-center flex-col content-center mx-auto justify-center justify-items-center">
        <h2 class="font-black text-3xl">SỬA THÔNG TIN</h2>
        <table class="w-1/2 leading-7 ">
            <tr class="w-full">
                <td class="w-1/4">TÊN HÀNG</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="name" value="<?php echo $rows["name"]?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">SỐ LƯỢNG</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="mail" value="<?php echo  $rows['email']?>"></td>
            </tr >
            <tr class="w-full">
                <td class="w-1/4">MÔ TẢ</td>
                <td class=w-3/4><input type="text" class="border border-soild w-1/2" name="address" value="<?php echo $rows["address"]?>"></td>
            </tr>
            <tr class="w-full">
              <td    class="w-1/4">GIÁ</td>
                <td class="w-3/4"><input type="number" class="border border-soild w-1/2" name="phone" value="<?php echo $rows["phone_number"]?>"></td>
            </tr>
            <tr class="w-full">
                <td class="w-1/4">THỂ LOẠI</td>
                <select name="role_id" id="">
                    <?php foreach($he as $ke =>$value){ ?>
                        <option value="<?php echo $value['id'] ?>"> <?php echo $value['name'] ?></option>
                        <?php }?>
                </select>
            </tr >
            <tr class="w-full">
                <td class="w-1/4">SALE</td>
                <td class="w-3/4"><input type="text" class="border border-soild w-1/2" name="password" value="<?php echo $rows["password"]?>"></td>
            </tr>
        </table>
        <button name="edit"  class="border border-soild w-1/12 rould rounded-full bg-blue-500 hover:bg-red-500">Sửa</button>
    </form>
</body>
</html>
