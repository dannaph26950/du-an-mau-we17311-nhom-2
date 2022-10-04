<?php 
    require "pdo.php";

    //thêm role
    function role_insert($ma_role,$role_name){
        $sql = "INSERT INTO role(ma_role, role_name) VALUES (?,?) ";
        pdo_execute($sql,$ma_role,$role_name);
    }

    //update role
    function role_update($ma_role,$role_name){
        $sql = "UPDATE role SET ma_role = ?, role_name = ? WHERE ma_role = ?";
        pdo_execute($sql,$ma_role,$role_name);
    }

    //xóa role
    function loai_delete($ma_role){
        $sql = "DELETE FROM loai WHERE ma_role=?";
        if(is_array($ma_role)){
            foreach ($ma_role as $role) {
                pdo_execute($sql, $role);
            }
        }
        else{
            pdo_execute($sql, $ma_role);
        }
    }
    //truy vấn tất cả các role
    function loai_select_all(){
        $sql = "SELECT * FROM role";
        return pdo_query($sql);
    }

    //Kiểm tra sự tồn tại của một role
    function loai_exist($ma_role){
        $sql = "SELECT count(*) FROM role WHERE ma_role=?";
        return pdo_query_value($sql, $ma_role) > 0;
    }
    
?>