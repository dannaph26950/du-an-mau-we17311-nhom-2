<?php 
    include_once "pdo.php";
   //truy vấn tất cả các role
   function role_select_all(){
    $sql = "SELECT * FROM roles";
    return pdo_query($sql);
}
    //thêm role
    function role_insert($role_name){
        $sql = "INSERT INTO roles(name) VALUES (?) ";
        pdo_execute($sql,$role_name);
    }

    //update role
    function role_update($ma_role,$role_name){
        $sql = "UPDATE role SET id = ?, 'name' = ? WHERE id = ?";
        pdo_execute($sql,$ma_role,$role_name);
    }

    //xóa role
    function role_delete($ma_role){
        $sql = "DELETE FROM roles WHERE id=?";
                pdo_execute($sql, $ma_role);
            }

 
    
?>