<?php 
    require "pdo.php";

    //thêm order
    function order_insert($customer_id,$total_price){
        $sql = "INSERT INTO order(customer_id, total_price,) VALUES (?,?) ";
        pdo_execute($sql,$customer_id,$total_price);
    }

    //update order
    function order_update($customer_id,$total_price){
        $sql = "UPDATE order SET customer_id = ?, total_price = ? WHERE customer_id = ?";
        pdo_execute($sql,$customer_id,$total_price);
    }

    //xóa order
    function loai_delete($customer_id){
        $sql = "DELETE FROM orders WHERE customer_id=?";
            pdo_execute($sql, $customer_id);
    }
    //truy vấn tất cả các order
    function loai_select_all(){
        $sql = "SELECT * FROM order";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một order
    function loai_exist($customer_id){
        $sql = "SELECT count(*) FROM orders WHERE customer_id=?";
        return pdo_query_value($sql, $customer_id) > 0;
    }
    
?>