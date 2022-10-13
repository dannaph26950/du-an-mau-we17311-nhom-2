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
    function loai_delete($id){
        $sql = "DELETE FROM sizes WHERE id=?";
                pdo_execute($sql, $id);
            }

    //truy vấn tất cả các size
    function loai_select_all(){
        $sql = "SELECT * FROM size";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một size
    function loai_exist($id){
        $sql = "SELECT count(*) FROM size WHERE id=?";
        return pdo_query_value($sql, $id) > 0;
    }
    
?>