<?php
include_once '../dao/user.php';
include_once '../global.php';
include_once '../dao/pdo.php';



function user_insert( $email,$pass,$address,$phone,$role,$name){
    $sql = "INSERT INTO user(email, password, address, phone_number,role_id,name) VALUES (?, ?, ?, ?, ?,?)";
    pdo_execute($sql,$email,$pass,$address,$phone,$role,$name);
}

function user_update($id, $email, $password, $address, $phone,$role_id,$ho_ten ){
    $sql = "UPDATE user SET email=?,password=?,address=?,phone_number=?,role_id=?,name=? WHERE id=?";
    pdo_execute($sql, $email, $password, $address, $phone,$role_id,$ho_ten,$id);
}

function get_user_by_email($email){
    $sql = "SELECT
                u.*, 
                r.name as role_name
            from user u
            join roles r
                on  u.role_id = r.id
            where email = '$email'";
            
        // return pdo_query($sql);
    return pdo_query_one($sql);
}function user_select_all_by_role(){
    $sql = "SELECT 
    u.*, 
    r.name as role_name
from user u
join roles r
    on u.role_id = r.id";

    return pdo_query($sql);
}
function user_delete($ma_kh){
    $sql = "DELETE FROM user  WHERE id=?";
    if(is_array($ma_kh)){
        foreach ($ma_kh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_kh);
    }
}

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function user_select_by_id($ma_kh){
    $sql = "SELECT * FROM user WHERE id=?";
    return pdo_query_one($sql, $ma_kh);
}
