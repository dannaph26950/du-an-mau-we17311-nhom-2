<?php
include_once 'pdo.php';

function comment_insert($id, $content, $product_id, $user_id){
    $sql = "INSERT INTO comment(content, product_id, 'user_id') VALUES (?,?,?)";
    pdo_execute($sql, $id, $content, $product_id, $user_id);
}

function comment_update($id, $content, $product_id, $user_id){
    $sql = "UPDATE comment SET 'id'=?,content=?,product_id=?,'user_id'=? WHERE id=?";
    pdo_execute($sql, $id, $content, $product_id, $user_id);
}
 
    function comment_all(){
        $sql = "SELECT * FROM comment";
        return pdo_query($sql);
    }

function comment_delete($id){
    $sql = "DELETE FROM comment WHERE id=?";
    pdo_query($sql, $id);
}

// function comment_select_all(){
//     $sql = "SELECT * FROM comment bl ORDER BY ngay_bl DESC";
//     return pdo_query($sql);
// }

function comment_select_by_id($id){
    $sql = "SELECT * FROM comment WHERE id=?";
    return pdo_query_one($sql, $id);
}

function comment_exist($id){
    $sql = "SELECT count(*) FROM comment WHERE id=?";
    return pdo_query_value($sql, $id) > 0;
}
// //-------------------------------//
// function comment_select_by_hang_hoa($ma_hh){
//     $sql = "SELECT b.*, h.ten_hh FROM comment b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_bl DESC";
//     return pdo_query($sql, $ma_hh);
// }
?>