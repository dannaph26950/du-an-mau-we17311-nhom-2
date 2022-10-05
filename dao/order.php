<?php 
    require "pdo.php";

    //thêm order
    function order_insert($ma_order,$order_name){
        $sql = "INSERT INTO order(ma_order, order_name) VALUES (?,?) ";
        pdo_execute($sql,$ma_order,$order_name);
    }

    //update order
    function order_update($ma_order,$order_name){
        $sql = "UPDATE order SET ma_order = ?, order_name = ? WHERE ma_order = ?";
        pdo_execute($sql,$ma_order,$order_name);
    }

    //xóa order
    function loai_delete($ma_order){
        $sql = "DELETE FROM loai WHERE ma_order=?";
        if(is_array($ma_order)){
            foreach ($ma_order as $order) {
                pdo_execute($sql, $order);
            }
        }
        else{
            pdo_execute($sql, $ma_order);
        }
    }
    //truy vấn tất cả các order
    function loai_select_all(){
        $sql = "SELECT * FROM order";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một order
    function loai_exist($ma_order){
        $sql = "SELECT count(*) FROM order WHERE ma_order=?";
        return pdo_query_value($sql, $ma_order) > 0;
    }
    
?>