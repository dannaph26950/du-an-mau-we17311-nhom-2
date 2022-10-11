<?php
/**
 * Mở kết nối đến CSDL sử dụng PDO
 */
function pdo_get_connection(){
    //hàm kết nối cơ sở dữ liệu
    $conn = new PDO(
    "mysql:host=202.92.5.49;dbname=fumpddnwhosting_nhom2;charset=utf8",
    'fumpddnwhosting_nhom2',
    'WokdrZSV8h'
    );
    return $conn;
}
/**
 * Thực thi câu lệnh sql thao tác dữ liệu (INSERT, UPDATE, DELETE)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_execute($sql){
    //hàm thao tác dữ liệu
    $conn = pdo_get_connection();
    $input = array_slice(func_get_args(),1);
    $stmt = $conn->prepare($sql);
    $stmt->execute($input);
    echo "Connected successfully";
}
/**
 * Thực thi câu lệnh sql truy vấn dữ liệu (SELECT)
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng các bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query($sql){
    //hàm truy vấn nhiều dữ liệu
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
/**
 * Thực thi câu lệnh sql truy vấn một bản ghi
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return array mảng chứa bản ghi
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_one($sql){
      //hàm truy vấn nhiều 1 dữ liệu
      $conn = pdo_get_connection();
      $input = array_slice(func_get_args(),1);
      $stmt = $conn->prepare($sql);
      $stmt->execute($input);
      return $stmt->fetch();
}
/**
 * Thực thi câu lệnh sql truy vấn một giá trị
 * @param string $sql câu lệnh sql
 * @param array $args mảng giá trị cung cấp cho các tham số của $sql
 * @return giá trị
 * @throws PDOException lỗi thực thi câu lệnh
 */
function pdo_query_value($sql){
    //hàm truy vấn trả về giá trịs
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $input = array_slice(func_get_args(),1);
    $stmt->execute($input);
    $row = $stmt->fetch();
    return array_values($row)[0];
}
?>