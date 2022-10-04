<?php 
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
function pdo_get_connection(){
    //hàm kết nối cơ sở dữ liệu
    $dburl = "mysql:host=202.92.5.49;dbname=fumpddnwhosting_nhom2;charset=utf8";
    $username = 'fumpddnwhosting_nhom2';
    $password = 'WokdrZSV8h';

    $conn = new PDO($dburl, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

?>