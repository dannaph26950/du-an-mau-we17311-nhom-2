<?php 
    require "pdo.php";

    //thêm order
    function order_insert($customer_id,$total_price){
        $sql = "INSERT INTO orders(id, total_price,) VALUES (?,?) ";
        pdo_execute($sql,$customer_id,$total_price);
    }

    //update order
    function order_update($customer_id,$total_price){
        $sql = "UPDATE orders SET customer_id = ?, total_price = ? WHERE id = ?";
        pdo_execute($sql,$customer_id,$total_price);
    }

    //xóa order
    function order_delete($customer_id){
        $sql = "DELETE FROM orders WHERE id=?";
            pdo_execute($sql, $customer_id);
    }
    //truy vấn tất cả các order
    function order_select_all(){
        $sql = "SELECT * FROM orders";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một order
    function order_exist($customer_id){
        $sql = "SELECT count(*) FROM orders WHERE id=?";
        return pdo_query_value($sql, $customer_id) > 0;
    }
    
?>