<?php
require_once 'pdo.php';

function user_insert($id, $email, $password, $address, $phone_number, $role_id){
    $sql = "INSERT INTO user(id, email, 'password', 'address', phone_number, role_id) VALUES (?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $id, $email, $password, $address, $phone_number, $role_id);
}

function user_update($id, $email, $password, $address, $phone_number, $role_id){
    $sql = "UPDATE user SET email=?, 'password'=?, 'address'=?, phone_number=?, role_id=? WHERE id=?";
    pdo_execute($sql,$id, $email, $password, $address, $phone_number, $role_id);
}

function user_delete($id){
    $sql = "DELETE FROM user  WHERE id=?";
        pdo_execute($sql, $id);
}

function user_select_all(){
    $sql = "SELECT * FROM user";
    return pdo_query($sql);
}

function user_select_by_id($id){
    $sql = "SELECT * FROM user WHERE id=?";
    return pdo_query_one($sql, $id);
}

function user_exist($id){
    $sql = "SELECT count(*) FROM user WHERE $id=?";
    return pdo_query_value($sql, $id) > 0;
}

function user_select_by_role($role_id){
    $sql = "SELECT * FROM user WHERE role_id=?";
    return pdo_query($sql, $role_id);
}

function user_change_password($id, $mat_khau_moi){
    $sql = "UPDATE user SET 'password'=? WHERE id=?";
    pdo_execute($sql, $mat_khau_moi, $id);
}