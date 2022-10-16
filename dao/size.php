<?php 
    require "pdo.php";

    //thêm size
    function size_insert($id,$size_name){
        $sql = "INSERT INTO size(id, size_name) VALUES (?,?) ";
        pdo_execute($sql,$id,$size_name);
    }

    //update size
    function size_update($id,$size_name){
        $sql = "UPDATE size SET id = ?, size_name = ? WHERE ma_size = ?";
        pdo_execute($sql,$id,$size_name);
    }

    //xóa size
    function size_delete($id){
        $sql = "DELETE FROM sizes WHERE id=?";
                pdo_execute($sql, $id);
            }

    //truy vấn tất cả các size
    function size_select_all(){
        $sql = "SELECT * FROM sizes";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một size
    function size_exist($id){
        $sql = "SELECT count(*) FROM sizes WHERE id=?";
        return pdo_query_value($sql, $id) > 0;
    }
    
?>